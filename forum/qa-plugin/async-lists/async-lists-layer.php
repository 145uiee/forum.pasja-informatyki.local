<?php

class qa_html_theme_layer extends qa_html_theme_base
{
    public function head_script()
    {
        if (in_array($this->template, ['qa', 'activity'])) {
            $path = qa_html(QA_HTML_THEME_LAYER_URLTOROOT . 'js/async-questions-list.js?v=' . QA_RESOURCE_VERSION);
            $this->content['script'][] = '<script src="' . $path . '" defer></script>';
        }

        qa_html_theme_base::head_script();
    }
}
