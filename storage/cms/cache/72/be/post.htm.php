<?php 
class Cms5c52feb5cd532724461070_0fbcba8afbe4ee2d1344067663fb3cdfClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
