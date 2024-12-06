# Installation
1. Install [Composer](https://getcomposer.org) if it is not installed.
2. Run the command `composer require ahbv/switch-button` in terminal to install the package.
3. Link or copy `vendor/ahbv/switch-button/switch-button.css` to the web asset folder or use some asset manager to serve `switch-button.css`.
4. Link `switch-button.css` to your page if your asset manager does not automatically include css files.

# How to use
```php
<?= 
new SwitchButton(
    disabled: false, 
    htmlLabel: true, 
    inline: true, 
    label: 'This is a <b>SwitchButton</b> with an <u>HTML</u> <i>label</i>',
    name: 'nameOfTheParameterWhichWillBeSubmittedByTheForm',
    onclick: "alert("SwitchButton clicked")" 
    size: 'sm', 
    value: true,
) 
?>
```

# Options
## disabled 
A boolean value indicating whether the user can toggle the switch button. `true` means it can't be toggled by the user.
The default value is `false`.

## htmlLabel
A boolean value indicating whether HTML tags within the `label` property should be escaped. True means that the HTML tags are not escaped.
The default value is `false`.

## inline 
A boolean value indicating whether the switch button should be placed inside the text. True means inside the enclosing text, false means that the switch button will be rendered as a block element which will break text around it and will be rendered on a separate line.
The default value is `false`.

## label 
A string containing the text of the label to be rendered on the right side of the button.
The default value is `''`

## name 
The name of the parameter that will be submitted by the form when the button is placed inside a form.
The default value is `''`.

## onclick 
A string containing the JavaScript code to be executed when the user clicks the button.
The default value is `''`.

## size 
A string that can take the values `''` (default), `'lg'` (large), and `'sm'` (small).
The default value is `''`.

## value 
Boolean value indicating whether the switch button is on (true) or off (false) by default.
The default value is `false`.
