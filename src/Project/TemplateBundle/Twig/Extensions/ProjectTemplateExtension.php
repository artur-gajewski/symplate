<?php

namespace Project\TemplateBundle\Twig\Extensions;

class ProjectTemplateExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'show_maxlen' => new \Twig_Filter_Method($this, 'showMaxLen'),
        );
    }

    /**
     * Crop string at the given length and append ending string.
     * 
     * @param $value
     * @param $maxlen
     * @param string $ending
     * @return string
     */
    public function showMaxLen($value, $maxlen, $ending = '')
    {
        if (strlen($value) > $maxlen) {
            return substr($value, 0, $maxlen) . $ending;
        } else {
            return $value;
        }
        return $string;
    }

    public function getName()
    {
        return 'Cobase_app_extension';
    }
}