##Digital Signage Wordpress Theme using Zurb's Foundation 4.

This work is licensed under a [Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License](http://creativecommons.org/licenses/by-nc/3.0/).
You are free to share & remix, but you must make attribution and you may not sell it.


##Widgets

###Weather
Drag a text widget into the Footer. Paste in the following:

<span class="icon weather-<?php echo $code ?>"></span>
<div class="conditions"><span class="temperature"><?php echo $temp ?>&deg;</span>
<span class="condition"><?php echo $condition; ?></span></div>
	
```
[thanks to @chriscoyier](http://css-tricks.com/using-weather-data-to-change-your-websites-apperance-through-php-and-css/)


###Clock
Drag a text widget into the Footer. Paste in the following div:

```html
<div class="clock">
	<ul>
		<li id="hours"> </li>
		<li id="point">:</li>
		<li id="min"> </li>
	</ul>
	<div id="Date"></div>
</div>
```
[thanks to @Bluxart](http://www.alessioatzeni.com/blog/css3-digital-clock-with-jquery)

