Runtime class is made for benchmarking purposes. You can modify it or use as you see fit in all your projects commercial or not.

How to use it?

install it with ...

Include it where you like, instaciate it with new Runtime, set the start and end time with $instance->setStartTime(microtime(true)) and $instance->setEndTime(microtime(true)).

Then to get runtime do $instance->sec();

This is basic version and will improve.
