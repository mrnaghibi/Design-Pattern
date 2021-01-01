<?php


namespace Pattern\Structural\Composite\Sample2;

/**
 * EN: Composite Design Pattern
 *
 * Intent: Lets you compose objects into tree structures and then work with
 * these structures as if they were individual objects.
 *
 * Example: The Composite pattern can streamline the work with any tree-like
 * recursive structures. The HTML DOM tree is an example of such a structure.
 * For instance, while the various input elements can act as leaves, the complex
 * elements like forms and fieldsets play the role of composites.
 *
 * Bearing that in mind, you can use the Composite pattern to apply various
 * behaviors to the whole HTML tree in the same way as to its inner elements
 * without coupling your code to concrete classes of the DOM tree. Examples of
 * such behaviors might be rendering the DOM elements, exporting it into various
 * formats, validating its parts, etc.
 *
 * With the Composite pattern, you don't need to check whether it's the simple
 * or complex type of element before executing the behavior. Depending on the
 * element's type, it either gets executed right away or passed all the way down
 * to all element's children.
 */
class Index
{
    /**
     * EN: The client code gets a convenient interface for building complex tree
     * structures.
     */
    private static function getProductForm(): FormElement
    {
        $form = new Form('product', "Add product", "/product/add");
        $form->add(new Input('name', "Name", 'text'));
        $form->add(new Input('description', "Description", 'text'));

        $picture = new Fieldset('photo', "Product photo");
        $picture->add(new Input('caption', "Caption", 'text'));
        $picture->add(new Input('image', "Image", 'file'));
        $form->add($picture);

        return $form;
    }

    /**
     * EN: The form structure can be filled with data from various sources. The
     * Client doesn't have to traverse through all form fields to assign data to
     * various fields since the form itself can handle that.
     *
     * @param FormElement $form
     */
    private static function loadProductData(FormElement $form)
    {
        $data = [
            'name' => 'Apple MacBook',
            'description' => 'A decent laptop.',
            'photo' => [
                'caption' => 'Front photo.',
                'image' => 'photo1.png',
            ],
        ];

        $form->setData($data);
    }

    /**
     * EN: The client code can work with form elements using the abstract interface.
     * This way, it doesn't matter whether the client works with a simple component
     * or a complex composite tree.
     *
     * @param FormElement $form
     */
    private static function renderProduct(FormElement $form)
    {
        // ..

        echo $form->render();
        // ..
    }

    public static function main()
    {
        $form = self::getProductForm();
        self::loadProductData($form);
        self::renderProduct($form);
    }
}
