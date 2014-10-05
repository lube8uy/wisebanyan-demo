wisebanyan-demo
=========

A small demo to measure with A/B tests which sign up button is more attractive on WiseBanyan's homepage.


Code Structure
-----------

* config - single place where to store each test variation configuration.
* lib - custom libraries for this project
* vendor - third party libraries
* views - html/assets
* index.php - single entry point for this demo
* composer files

Installation
--------------

No special installation needed.

Test configuration estructure
--------------

```sh
return array(
    'name' => 'homepage',
    'probabilities' => array(
        'A' => 1,
        'B' => 1
    ),
    'variations' => array(
        'A' => array(
            'main_title' => 'My great message A',
            'main_description' => 'My great description A',
            'button_text' => 'Get in touch',
            'show_main_image' => false
        ),
        'B' => array(
            'main_title' => 'My great message B',
            'main_description' => 'My great description B',
            'button_text' => 'Book a free consultory',
            'show_main_image' => false
        )
    )
);
```

Use
--------------

```sh
use Towerhousestudio\AB\Test;

//Select homepage test variation by name
$homepageTest = Test::read('homepage');

```

Then, on the render template just get the values especified on the configuration file.

```sh
<h1><?php echo $homepageTest->get('main_title') ?></h1>
```