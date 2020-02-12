#### Process to develop a custom theme in wordpress 
```
We have to create the below files for creating a wordpress theme 
1. index.php
2. style.css
3. header.php
4. footer.php
5. front-page.php
6. page.php
7. single.php
8. archive.php
9. functions.php
```

#### Loading the css and javascript file

##### Below function are need to be write in the functions.php file

**Create a function to load css file**

```
function loadCss() {
  wp_register_style('customCss', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
  wp_enqueue_style('customeCss');
}

// call the function 

add_action('wp_enqueue_scripts', 'loadCss');
```

**Create a function to load js file**

```
function loadScripts() {
  wp_register_script('customScript', get_template_directory_uri() . '/js/custom.js', '', 1, true);
  wp_enqueue_script('customScript');
}

// call the function 

add_action('wp_enqueue_scripts', 'loadScript');
```
