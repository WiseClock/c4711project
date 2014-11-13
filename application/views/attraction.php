<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * views/attractions.php
 *Attractions page
 * Displays different attractions and brief explenation
 */
?>
<h2>Attraction</h2>
{detail}
<h4>{name} - {category}</h4>


<div id="featured_project">
    <div id="slider">
        <ul id="sliderContent">
            <li class="sliderImage">
                <a href=""><img src="/assets/images/slider/{image}" alt="1" /></a>
                <span class="bottom"></span>
            </li>

            <li class="sliderImage">
                <a href=""><img src="/assets/images/slider/{image1}" alt="2" /></a
                  <span class="bottom"></span>
            </li>
            <li class="sliderImage">
                <a href=""><img src="/assets/images/slider/{image2}" alt="3" /></a>
                <span class="bottom"></span>
              </li>

</span>

<li class="clear sliderImage"></li>
</ul>
</div>
</div>

<br />
<br />
<h3>{description}</h3>
<br />

<h6>Location:</h6>
<h3>{location}</h3>
<br />

<h6>Price:</h6>
<h3>{pricerange}</h3>

<h6>Extra Info:</h6>
<h3>
{sound}
{foodtype}
{dropin}
<br />
{cardio}
{privacy}
{togo}
</h3>

<a href="http://comp4711.local/category"><img class="eat" src="/assets/images/icon/back.png" alt="1" /></a>

{/detail}
