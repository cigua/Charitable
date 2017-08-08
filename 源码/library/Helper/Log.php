<?php

/**
 * 日志类
 *
 * @author: moxiaobai
 * @since : 2016/3/3 17:26
 */


/**
 * 日志处理类
 */
class Helper_Log
{
    /**
     * 日志写入接口
     * @access public
     * @param string $log 日志信息
     * @param string $destination  写入目标
     * @return void
     */
    public static function write($log, $destination = '')
    {

        $config = array(
            'log_file_size'   => 2097152,
            'log_path'        => APP_LOG,
        );

        $now = date('Y-m-d H:i:s');
        if (empty($destination)) {
            $destination = $config['log_path'] . date('y_m_d') . '.log';
        }
        // 自动创建日志目录
        $log_dir = dirname($destination);
        if (!is_dir($log_dir)) {
            mkdir($log_dir, 0755, true);
        }
        //检测日志文件大小，超过配置大小则备份日志文件重新生成
        if (is_file($destination) && floor($config['log_file_size']) <= filesize($destination)) {
            rename($destination, dirname($destination) . '/' . time() . '-' . basename($destination));
        }
        error_log("[{$now}] " . $_SERVER['REMOTE_ADDR'] . ' ' . $_SERVER['REQUEST_URI'] . "\r\n{$log}\r\n", 3, $destination);
    }
}