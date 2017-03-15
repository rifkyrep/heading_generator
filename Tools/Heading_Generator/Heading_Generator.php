<?php
/**
 * Created by PhpStorm.
 * User: Rifky_Rep
 * Date: 09/02/2017
 * Time: 09.52
 */

namespace Tools\Heading_Generator;

class Heading_Generator
{
    public function __construct($teks, $color = 'black', $op = null)
    {
        $this->teks = $teks;
        $this->color = $color;
        $this->op = $op === null ? ' align="center" style="color:' . $this->color . '" ' : $op;
    }

    public function generate()
    {
        if (!isset($this->type)) {
            $this->type = array('1', '2', '3', '4');
        }
        $html = "";
        foreach ($this->type as $tipe) {
            if ($this->teks['style'] === $tipe) {
                $html .= '<h' . $this->teks['style'] . '' . $this->op . '>' . $this->teks['data'] . '</h' . $this->teks['style'] . '>';
            }
        }
        return $html;
    }
}