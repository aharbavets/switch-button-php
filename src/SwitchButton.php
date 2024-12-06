<?php

namespace Ahbv\SwitchButton;

/**
 * This class requires switch-button.css which should be included into the HTML page
 */
class SwitchButton {

    public function __construct(
        private $name = '',
        private $value = false,
        private $onclick = '',
        private $disabled = false,
        private $inline = false,
        private $size = '',
        private $htmlLabel = false,
        private $label = '',
    ) {}

    public function __toString(): string {
        $name = htmlspecialchars($this->name);
        $checked = $this->value ? 'checked="checked"' : '';
        $disabled = $this->disabled ? 'disabled="disabled"' : '';
        $onChange = htmlspecialchars($this->onclick);
        $label = $this->htmlLabel ? $this->label : htmlspecialchars($this->label);
        $display = $this->inline ? 'inline-flex' : 'flex';
        $sizeClass = $this->size ? 'switch-' . $this->size : '';

        return
            /** @lang HTML */
            <<<HTML
                <div style="display: $display; align-items: center; margin: 3px">
                    <label class="switch $sizeClass">
                        <input type="hidden" value="0" name="$name" $disabled>
                        <input
                            type="checkbox"
                            value="1"
                            name="$name" 
                            $checked
                            $disabled
                            onchange="$onChange"
                        >
                        <span class="slider round"></span>
                    </label>
                    <label>&nbsp; $label</label>
                </div>
            HTML;
    }

}
