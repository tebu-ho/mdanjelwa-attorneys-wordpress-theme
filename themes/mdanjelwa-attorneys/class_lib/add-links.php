<?php
/**
 * Dynamically add links to Learn More a tags
 */

class LearnMoreLinks
{
    public $faq      = '/imibuzo';
    public $services = '/practice-areas';
    public $about    = '/about-mdanjelwa';

 /**
  * If section title is 'Frequently Asked Questions' echo faq link
  */

    public function addLink()
    {
        if ( get_the_title()       == 'Frequently Asked Questions' ) {
            echo $this->faq;
        } elseif ( get_the_title() == 'Practice Areas' ) {
            echo $this->services;
        } else {
            echo $this->about;
        } 
    }
}
?>