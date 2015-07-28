![](headers/Sachin_Lesson_4.4.jpg)
# Introduction to parallax scrolling

These days, a lot of websites are made as a single page scrolling site, and almost all of them feature an effect known as **parallax scrolling**. Basically this means that the images in the background appear to be placed at a different visual depth than the text on the top and this gives an impression of three dimensional motion.

One of the best and easiest ways of creating this effect is to use Mark Dalgleish's Stellar.js plugin. 

# Creating parallax scrolling with Stellar.js:

Open up *parallaxScroll_Begin.htm* file to begin. This is essentially the completed version of our smooth scrolling example file that we created earlier in this course with a few extra additions.

The only additions on this page are the `section` tags that have images in their CSS `background` property. To read more about this plugin you can visit [markdalgleish.com/projects/stellar.js](http://markdalgleish.com/projects/stellar.js/).

Instead of downloading this plugin, we'll link it up from a CDN:

```html
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.2/jquery.stellar.min.js"></script>
```

To use this plugin, you can simply invoke it by typing `$.stellar`. However we also have to define the perceptual depth of the images with respect to the text and other elements on this page:

```html
<section class="panels green" data-stellar-background-ratio="0.5">
	<div class="content">
		<h1 class="bigFont">Only the Best Short Stories</h1>
	</div>
</section>
<section class="imageboxes image1" data-stellar-background-ratio="0.8"></section>
<section class="panels pink" id="story1">
	<div class="content">
		<h2 class="storyTitle">High &amp; Lifted Up</h2>
	[...]
</section>
<section class="imageboxes image2" data-stellar-background-ratio="0.8"></section>
<section class="panels purple" id="story2">
<div class="content">
<h2 class="storyTitle whitefont">End of the Line</h2>
[...]
</section>
<section class="imageboxes image3" data-stellar-background-ratio="0.8" data-stellar-horizontal-offset="50"></section>
<section class="panels yellow" id="story3">
<div class="content">
<h2 class="storyTitle whitefont">Rapunzel</h2>
<h3 class="author whitefont">Brothers Grimm</h3>
[...]
</section>
```

Values below 0 will perceptually make images appear at a farther distance from regular elements on the page whether values above 1 will give a sense of elements as being closer to the viewer.

You may check the result in your browser.