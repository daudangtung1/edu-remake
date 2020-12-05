<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Recusive extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    private $data;
    private $htmlSelect = '';

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

    }

    public function categoryRecusive($categoryBlogID, $category_blog_id = 0, $text = '')
    {
        foreach ($this->data as $value) {
            if ($value['category_blog_id'] == $category_blog_id) {
                if (!empty($categoryBlogID) && $categoryBlogID == $value['id']) {
                    $this->htmlSelect .= "<option selected value = '" . $value['id'] . "' >" . $text . $value['name'] . "</option>";
                } else {
                    $this->htmlSelect .= "<option value = '" . $value['id'] . "' >" . $text . $value['name'] . "</option>";
                }
                $this->categoryRecusive($categoryBlogID, $value['id'], $text . '-');
            }
        }
        return $this->htmlSelect;
    }
}   
