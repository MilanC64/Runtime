### Version 0.1
---

# Runtime

---

Runtime class is made for benchmarking purposes. You can modify it or use as you see fit in all your projects commercial or not. You
can wrap ti arround functions or methods, or pass it objects or className their methods and arguments and check their runtime.

---

This class uses bcmath php extension so you must have it installed. You can check this via phpinfo() in the extensions section.
Also change the setting of your bcmath.scale = 13 or more in your php.ini because we display floats to 0.0000000000001 accuracy.

---

**How to use it?**

---

Install it with composer

Add to your composer.json:

```json
{
    "minimum-stability": "dev",
    "prefer-stable" : true,
    "require": {
        "webops/runtime": "dev-master"
    }
}
```

and do composer install.

or you can: composer require webops/runtime with having in mind minimum stability which is set to "dev" right now.

---

**Usage:**

1. Inside function or a method: use the sec() method
Include it where you like, instaciate it with new Runtime, set the start and end time with $instance->setStartTime(microtime(true))
and $instance->setEndTime(microtime(true)).
Then to get runtime do $instance->sec();

2. From outside of an object: use the objMethodSec() method
Include it where you like, instaciate it with new Runtime, set object with $runtime->setObject(new YourObject), set method with 
$runtime->setMethod('yourMethodName'), set arguments if you have them with $runtime->setArgs(['array', $of, 'arguments']) and finaly
run the $runtime->objMethodSec();

3. Static methods inside a class: use the staticSec() method
Include it where you like, instaciate it with new Runtime, set class with $runtime->setClass('Fully/Qualified/ClassName'), set method
with $runtime->setMethod('yourMethodName'), set arguments if you have them with $runtime->setArgs(['array', $of, 'arguments']) and 
finaly run the $runtime->staticSec();

4. Methods inside a class : use the classMethodSec() method
Include it where you like, instaciate it with new Runtime, set class with $runtime->setClass('Fully/Qualified/ClassName'), set method
with $runtime->setMethod('yourMethodName'), set arguments if you have them with $runtime->setArgs(['array', $of, 'arguments']) and 
finaly run the $runtime->classMethodSec();

---

This is basic version and will improve.
