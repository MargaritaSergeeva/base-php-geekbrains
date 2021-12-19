<?php


class Calculate
{
    private array $filtered;

    public function __construct($value)
    {
        $this->filtered = $value;
    }

    /**
     *
     */
    public function get()
    {
        if (!empty($this->filtered)) {
            $this->mathOperation($this->filtered['value_1'], $this->filtered['value_2'], $this->filtered['operation']);
        }
        if (empty($this->filtered['operation'])) {
            $this->getErrorHeader();
            echo 'Вы не выбрали математическую функцию';
        }
    }

    /**
     * @param $val
     * @return mixed
     */
    public function result($val)
    {
        if ($val === false) {
            $this->getErrorHeader();
            echo 'На ноль делить нельзя!';
            return;
        }
        $this->getSuccessHeader();
        echo $val;
    }

    /**
     * @param $value_1
     * @param $value_2
     * @param $operation
     */
    protected function mathOperation($value_1, $value_2, $operation)
    {
        switch ($operation) {
            case 'addition':
                $this->sum($value_1, $value_2);
                break;
            case 'subtraction':
                $this->sub($value_1, $value_2);
                break;
            case 'multiplication':
                $this->mul($value_1, $value_2);
                break;
            case 'division':
                $this->div($value_1, $value_2);
        }
    }

    /**
     * @param $value_1
     * @param $value_2
     * математическая функция прибавления
     */
    protected function sum($value_1, $value_2)
    {
        return $this->result($value_1 + $value_2);
    }

    /**
     * @param $value_1
     * @param $value_2
     * математическая функция вычитания
     */
    protected function sub($value_1, $value_2)
    {
        return $this->result($value_1 - $value_2);
    }

    /**
     * @param $value_1
     * @param $value_2
     * математическая функция умножения
     */
    protected function mul($value_1, $value_2)
    {
        return $this->result($value_1 * $value_2);
    }

    /**
     * @param $value_1
     * @param $value_2
     * математическая функция деления
     */
    protected function div($value_1, $value_2)
    {
        if ($value_2 == 0) {
            return $this->result(false);
        }
        return $this->result($value_1 / $value_2);
    }

    /**
     * Заголовок в случае ошибки
     */
    protected function getErrorHeader()
    {
        return header("HTTP/1.0 500 Internal Server Error");
    }

    /**
     * Заголовок когда всё ок
     */
    protected function getSuccessHeader()
    {
        return header("HTTP/1.1 200 OK");
    }
}