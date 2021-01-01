<?php


namespace Pattern\Structural\Decorator\Sample2;

/**
 * EN: Decorator Design Pattern
 *
 * Intent: Lets you attach new behaviors to objects by placing these objects
 * inside special wrapper objects that contain the behaviors.
 *
 * Example: In this example, the Decorator pattern helps you to construct
 * complex text filtering rules to clean up content before rendering it on a web
 * page. Different types of content, such as comments, forum posts or private
 * messages require different sets of filters.
 *
 * For example, while you'd want to strip out all HTML from the comments, you
 * might still want to keep some basic HTML tags in forum posts. Also, you may
 * want to allow posting in Markdown format, which shall be processed before any
 * HTML filtering takes place. All these filtering rules can be represented as
 * separate decorator classes, which can be stacked differently, depending on
 * the nature of the content you have.
 */


/**
 * EN: The client code might be a part of a real website, which renders user-
 * generated content. Since it works with formatters through the Component
 * interface, it doesn't care whether it gets a simple component object or a
 * decorated one.
 */
function displayCommentAsAWebsite(InputFormat $format, string $text)
{
    // ..

    echo $format->formatText($text);
    // ..
}


class Index
{
    public static function main()
    {
        /**
         * EN: Input formatters are very handy when dealing with user-generated content.
         * Displaying such content "as is" could be very dangerous, especially when
         * anonymous users can generate it (e.g. comments). Your website is not only
         * risking getting tons of spammy links but may also be exposed to XSS attacks.
         */
        $dangerousComment = <<<HERE
                            Hello! Nice blog post!
                            Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
                            <script src="http://www.iwillhackyou.com/script.js">
                              performXSSAttack();
                            </script>
                            HERE;

        /**
         * EN: Naive comment rendering (unsafe).
         *
         */
        $naiveInput = new TextInput();
        echo "Website renders comments without filtering (unsafe):\n";
        displayCommentAsAWebsite($naiveInput, $dangerousComment);
        echo "\n\n\n";

        /**
         * EN: Filtered comment rendering (safe).
         *
         */
        $filteredInput = new PlainTextFilter($naiveInput);
        echo "Website renders comments after stripping all tags (safe):\n";
        displayCommentAsAWebsite($filteredInput, $dangerousComment);
        echo "\n\n\n";


        /**
         * EN: Decorator allows stacking multiple input formats to get fine-grained
         * control over the rendered content.
         */
        $dangerousForumPost = <<<HERE
                                # Welcome
                                
                                This is my first post on this **gorgeous** forum.
                                
                                <script src="http://www.iwillhackyou.com/script.js">
                                  performXSSAttack();
                                </script>
                                HERE;

        /**
         * EN: Naive post rendering (unsafe, no formatting).
         *
         */
        $naiveInput = new TextInput();
        echo "Website renders a forum post without filtering and formatting (unsafe, ugly):\n";
        displayCommentAsAWebsite($naiveInput, $dangerousForumPost);
        echo "\n\n\n";

        /**
         * EN: Markdown formatter + filtering dangerous tags (safe, pretty).
         *
         */
        $text = new TextInput();
        $markdown = new MarkdownFormat($text);
        $filteredInput = new DangerousHTMLTagsFilter($markdown);
        echo "Website renders a forum post after translating markdown markup" .
            " and filtering some dangerous HTML tags and attributes (safe, pretty):\n";
        displayCommentAsAWebsite($filteredInput, $dangerousForumPost);
        echo "\n\n\n";
    }
}
