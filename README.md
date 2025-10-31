
<!-- vim: set foldmethod=marker fmr=###,--- :-->

*Updated 30 October, 2025*

### GD Theme

This is the WP theme used at generatordata.net

For the theme to work correctly, underscore-me theme needs to be in wp-content/themes
```
ln -s /home/gd-theme/underscore-me-source /home/generatordata/wp-content/themes/underscore-me
ln -s /home/gd-theme /home/generatordata/wp-content/themes/gd-theme
```
---

<details>
</details><details><summary>Uploading Files</summary>

### Uploading Files

I can already SSH into the server, so that's not an issue.
```
# add to .bashrc
GD="root@45.79.0.91:/home/uploads/"

# on the iMac
rsync -vaPur filetoupload $GD
```
---

</details><details><summary>Home Page</summary>

### Home Page 

Go to Settings › Reading:
- Your homepage displays: `A static page`

---

</details><details><summary>Fonts</summary>

### Fonts

Previously, font families were defined in `header.php` (Google fonts only):
```
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
```
I have put them in /fonts in this repo, so the links look like:
```
  src:url('/wp-content/themes/gd-theme/fonts/Bookerly.woff') format('woff');
```
For them to work it is necessary to:
```
chmod -R 755 fonts
```
---

</details><details><summary>Logo</summary>

### Logo

Upload the logo via Customize › Site Identity › Logo

---

</details><details><summary>Customizing Theme Info</summary>

### Customizing Theme Info

Edit `style.css` and update the information at the top of the file.

---

</details><details><summary>Primary Menu</summary>

### Primary Menu

For the top menu to display correctly:

- Appearance › Customize › Menus
- click on Main Menu and check **Primary**

---

</details><details><summary>Footer Links</summary>

### Footer Links

Footer links are in footer.php:
```
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://generatordata.net', 'underscore-me' ) ); ?>">
				<?php printf( esc_html__( '%s', 'underscore-me' ), 'generatordata.net' ); ?>
			</a>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'https://llpowerservices.com', 'underscore-me' ) ); ?>">
				<?php printf( esc_html__( '%s', 'underscore-me' ), 'llpowerservices.com' ); ?>
			</a>
		</div><!-- .site-info -->
```
---

</details><details><summary>Special CSS</summary>

### Special CSS

Cross referenced to [tech.svija.love](https://github.com/svijalove/tech.svija.love)

add class "left" to an image to align it to the left without causing text to wrap
```
.wp-block-image.wp-block-image{
  width:100%;
  text-align:center;
}

.retina{
  zoom:0.5;
  margin:1.3rem 0 1.1rem 0;
}

.shadow{ /* 20px white space over · 30px white space under */
  margin-top:-0.5rem;
  margin-bottom:-1.4rem;
}

figure.drop img{
  border-radius:10px !important;
  border:0.5px solid #0004;
  filter: drop-shadow(0px 12px 20px #00000028);
}

figure.mac img{
  border-radius:20px !important;
  border:0.5px solid #0004;
  filter: drop-shadow(0px 12px 20px #00000028);
  margin:1.7rem 0 1.5rem 0;
}

figure.panel img{
  border-radius:10px 10px 0px 0px !important;
  border:none;
  box-shadow:0px 10px 40px #00000028;
  margin:0.1rem 0 0.1rem 0;
}
```
---

</details><details><summary>Special CSS</summary>
