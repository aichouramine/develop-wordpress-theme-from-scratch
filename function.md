#### Loading the css and javascript file

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