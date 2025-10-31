
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
### Customizing Theme Info

Edit `style.css` and update the information at the top of the file.

---
### Primary Menu

For the top menu to display correctly:

- Appearance › Customize › Menus
- click on Main Menu and check **Primary**

---
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
