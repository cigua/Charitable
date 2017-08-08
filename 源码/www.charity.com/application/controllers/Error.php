<?php

class ErrorController extends BaseController {

	public function errorAction($exception) {
        try {

        } catch (Yaf_Exception_LoadFailed $e) {
            //加载失败
        } catch (Yaf_Exception $e) {
            //其他错误
            $this->api('tools', 'errorLog')->addLog('pms', 666);
        }

	}
}
