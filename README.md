# Easy Upgrades!

"Wow, I didn't know I needed this" - Everyone, ever

## How to install

    composer require navarr/easy-upgrades
    
> Holy crap, that's it?

OF COURSE IT IS!  What year do you think it is?!

## How to use

In your class, `use CallableUpdateTrait;`, like so:

    class SomeCrappyClass
    {
        use CallableUpdateTrait;
        
        public function somethingTriggeredExternally($currentVersion, $futureVersion)
        {
            $this->runAt('2.0.0', $currentVersion, function() {
                echo 'Hello, 2.0.0!',PHP_EOL;
            });
        }
    }
    
Basically, using CallableUpdateTrait gives you the `runAt` method.  Neat stuff!

## Wait, this only contains one class that does practically nothing

Yes, but now you don't have to write it into every project, or every module, or whatever.

## Why this?

It's a common function I wish I had in Magento 2 - so I made it.  It doesn't need Magento, or have any dependencies.  It just does what it says on the tin.
