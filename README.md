![](jQuery_Beyond_the_Basics_handouts/headers/Sachin_Lesson_4.2.jpg)
# Introduction to Carousel

These days a lot of websites present a carousel feature that lets you display content in either an animated slideshow format or a touch-enabled interactive panel that users can swipe left or right.

Let's implement a carousel which displays images as an auto-playing slideshow. We'll use the popular Owl Carousel plugin.

# Building a carousel

Head over to [owlgraphic.com/owlcarousel](owlgraphic.com/owlcarousel) and also open up *Carousel_Begin.htm* file.

This plugin provides a touch-enabled, responsive carousel. It is compatible with both old and modern browsers. You may download Owl Carousel plugin zip archive from the official website. Once you're done, open it up. You will see a bunch of folders including *demos*. Inside, you can see the *.css* and *.js* files that make up the plugin. So the first thing that we'll do, is dropping this folder into our project.

Hook up the files with Owl Carousel styles:

```html
<link rel="stylesheet" href="owl-carousel/owl.carousel.css" type="text/css" />
<link rel="stylesheet" href="owl-carousel/owl.theme.css" type="text/css" />
```

We also need the *.js* file:

```js
<script src="owl-carousel/owl.carousel.min.js"></script>
```

Implementing the carousel is super simple. First of all, set the `class` attribute on our `div` that contains all the images:

```html
<div id="carousel" class="owl-carousel"></div>
```

Now the JS code:

```js
$(function() {
	$('#carousel').owlCarousel({
		items:1,
		autoPlay:true
	});
});
```

`items:1` means that one image will be displayed at a time.

`autoPlay:true` sets the carousel to play automatically at a delay of five seconds per image.

Go ahead and check it in your browser!