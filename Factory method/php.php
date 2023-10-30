<?php
interface logger
{
    public function log(string $message);
}

class databaseLogger implements logger
{
    public function log(string $message)
    {
        return 'Logged';
    }
}

class fileLogger implements logger
{
    public function log(string $message)
    {
        return 'Logged';
    }
}

interface loggerFactory
{
    public function createLogger(): logger;
}

class databaseLoggerFactory implements loggerFactory
{
    public function createLogger(): logger
    {
        return new databaseLogger();
    }
}

class fileLoggerFactory implements loggerFactory
{
    public function createLogger(): logger
    {
        return new fileLogger();
    }
}