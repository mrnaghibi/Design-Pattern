<?php

namespace Pattern\Structural\Composite\Sample2;

/**
 * EN: The fieldset element is a Concrete Composite.
 *
 */
class Fieldset extends FieldComposite
{
    public function render(): string
    {
        // EN: Note how the combined rendering result of children is
        // incorporated into the fieldset tag.
        $output = parent::render();

        return "<fieldset><legend>{$this->title}</legend>\n$output</fieldset>\n";
    }
}