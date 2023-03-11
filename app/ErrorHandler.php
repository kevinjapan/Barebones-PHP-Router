<?php


class ErrorHandler {

    //
    // handle exceptions
    //
    public static function handleException(Throwable $exception) {
        http_response_code(500);
        echo json_encode([
            "code" => $exception->getCode(),
            "message" => $exception->getMessage(),
            "file" => $exception->getFile(),
            "line" => $exception->getLine()
        ]);
    }

    //
    // handle errors
    //
    public static function handleError(
        int $errno,string $errstr, string $errfile, int $errline
    ) {
        // use ErrorException - represent errors as exceptions..
        throw new ErrorException($errstr,0,$errno,$errfile,$errline);
    }

}