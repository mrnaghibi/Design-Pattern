<?php


namespace Tests\Sample2;

use PHPUnit\Framework\TestCase;
use Pattern\Structural\Proxy\Sample2\Index as ProxyIndex;
use Pattern\Structural\Flyweight\Sample2\Index as FlyweightIndex;
use Pattern\Structural\Facade\Sample2\Index as FacadeIndex;
use Pattern\Structural\Decorator\Sample2\Index as DecoratorIndex;
use Pattern\Structural\Composite\Sample2\Index as CompositeIndex;
use Pattern\Structural\Bridge\Sample2\Index as BridgeIndex;
use Pattern\Structural\Adapter\Sample2\Index as AdapterIndex;

class StructuralTest extends TestCase
{
    public function testAdapter()
    {
        AdapterIndex::main();
        self::expectOutputString(
            <<<EOF
            Client code is designed correctly and works with email notifications:
            Sent email with title 'Website is down!' to 'developers@example.com' that says '<strong style='color:red;font-size: 50px;'>Alert!</strong> Our website is not responding. Call admins and bring it up!'.
            
            The same client code can work with other classes via adapter:
            Logged in to a slack account 'example.com'.
            Posted following message into the 'Example.com Developers' chat: '#Website is down!# Alert! Our website is not responding. Call admins and bring it up!'.

            EOF
        );
    }

    public function testBridge()
    {
        BridgeIndex::main();
        self::expectOutputString(
            <<<EOF
            HTML view of a simple content page:
            <html><body>
            <h1>Home</h1>
            <div class='text'>Welcome to our website!</div>
            </body></html>
            
            JSON view of a simple content page, rendered with the same client code:
            {
            "title": "Home",
            "text": "Welcome to our website!"
            }
            
            HTML view of a product page, same client code:
            <html><body>
            <h1>Star Wars, episode1</h1>
            <div class='text'>A long time ago in a galaxy far, far away...</div>
            <img src='/images/star-wars.jpeg'>
            <a href='/cart/add/123'>Add to cart</a>
            </body></html>
            
            JSON view of a simple content page, with the same client code:
            {
            "title": "Star Wars, episode1",
            "text": "A long time ago in a galaxy far, far away...",
            "img": "/images/star-wars.jpeg",
            "link": {"href": "/cart/add/123", "title": "Add to cart"}
            }
            EOF
        );
    }

    public function testComposite()
    {
        CompositeIndex::main();
        self::expectOutputString(
            <<<EOF
            <form action="/product/add">
            <h3>Add product</h3>
            <label for="name">Name</label>
            <input name="name" type="text" value="Apple MacBook">
            <label for="description">Description</label>
            <input name="description" type="text" value="A decent laptop.">
            <fieldset><legend>Product photo</legend>
            <label for="caption">Caption</label>
            <input name="caption" type="text" value="Front photo.">
            <label for="image">Image</label>
            <input name="image" type="file" value="photo1.png">
            </fieldset>
            </form>

            EOF
        );
    }

    public function testDecorator()
    {
        DecoratorIndex::main();
        self::expectOutputString(
            <<<EOF
            Website renders comments without filtering (unsafe):
            Hello! Nice blog post!
            Please visit my <a href='http://www.iwillhackyou.com'>homepage</a>.
            <script src="http://www.iwillhackyou.com/script.js">
              performXSSAttack();
            </script>
            
            
            Website renders comments after stripping all tags (safe):
            Hello! Nice blog post!
            Please visit my homepage.
            
              performXSSAttack();
            
            
            
            Website renders a forum post without filtering and formatting (unsafe, ugly):
            # Welcome
            
            This is my first post on this **gorgeous** forum.
            
            <script src="http://www.iwillhackyou.com/script.js">
              performXSSAttack();
            </script>
            
            
            Website renders a forum post after translating markdown markup and filtering some dangerous HTML tags and attributes (safe, pretty):
            <h1>Welcome</h1>
            
            <p>This is my first post on this <strong>gorgeous</strong> forum.</p>
            
            <p></p>
            
            

            EOF
        );
    }

    public function testFacade()
    {
        FacadeIndex::main();
        self::expectOutputString(
            <<<EOF
            Fetching video metadata from youtube...
            Saving video file to a temporary file...
            Processing source video...
            Normalizing and resizing the video to smaller dimensions...
            Capturing preview image...
            Saving video in target formats...
            Done!

            EOF
        );
    }

    public function testFlyweight()
    {
        FlyweightIndex::main();
        self::expectOutputString(
            <<<EOF
            Client: Let's see what we have in "cats.csv".
            CatDataBase: Added a cat (Steve, Bengal).
            CatDataBase: Added a cat (Siri, Domestic short-haired).
            CatDataBase: Added a cat (Fluffy, Maine Coon).
            
            Client: Let's look for a cat named "Siri".
            = Siri =
            Age: 2
            Owner: Alexander Shvets
            Breed: Domestic short-haired
            Image: /cats/domestic-sh.jpg
            Color: Black
            Texture: Solid
            
            Client: Let's look for a cat named "Bob".
            CatDataBase: Sorry, your query does not yield any results.
            EOF
        );
    }

    public function testProxy()
    {
        ProxyIndex::main();
        self::expectOutputString(
            <<<EOF
            Executing client code with real subject:
            Downloading a file from the Internet.
            Downloaded bytes: 1256
            Downloading a file from the Internet.
            Downloaded bytes: 1256
            
            Executing the same client code with a proxy:
            CacheProxy MISS. Downloading a file from the Internet.
            Downloaded bytes: 1256
            CacheProxy HIT. Retrieving result from cache.

            EOF
        );
    }
}
