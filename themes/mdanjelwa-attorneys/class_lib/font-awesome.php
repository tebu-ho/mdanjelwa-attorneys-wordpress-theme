<?php
/**
 * Generates Font-Awesome icons based on section title
 */
class FontAwesomeIcons
{
    public $home          = 'fa fa-home fa-3x';
    public $family        = 'fa fa-user-times fa-3x';
    public $criminal      = 'fa fa-legal fa-3x';
    public $justice       = 'fa fa-balance-scale fa-3x';
    public $business      = 'fa fa-group fa-3x';
    public $correspondent = 'fa fa-handshake-o fa-3x';
    public $comments      = 'fa fa-comments-o fa-3x';

 /**
  * If section title is 'Property Law' display 'home' icon
  */
    public function displayIcon()
    {
        if ( get_the_title()       == 'Property Law' ) {
            echo $this->home;
        } elseif ( get_the_title() == 'Divorce And Family Law' ) {
            echo $this->family;
        } elseif ( get_the_title() == 'Criminal Law' ) {
            echo $this->criminal;
        } elseif ( get_the_title() == 'Frequently Asked Questions' ) {
            echo $this->comments;
        } elseif ( get_the_title() == 'Civil Law' || get_the_title() == 'Practice Areas' ) {
            echo $this->justice;
        } elseif ( get_the_title() == 'Business Law' || get_the_title() == 'About Mdanjelwa Attorneys' ) {
            echo $this->business;
        } else {
            echo $this->correspondent;
        }
    }
}
?>