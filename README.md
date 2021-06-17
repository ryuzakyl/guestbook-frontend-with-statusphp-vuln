# guestbook-frontend-with-statusphp-vuln

A version of the PHP Guestbook frontend app including the status vulnerability

> :warning: **DO NOT** deploy this Docker image to a production or Internet facing cluster or instance.
>
> This Docker image is vulnerable to Remote Code Execution (RCE) is must **ONLY** be used for *security research* purposes.

# Relevant details

This image serves as a replacement for the ` gcr.io/google_samples/gb-frontend:v5` image used on the official Kubernetes tutorial on deploying the PHP-Redis Guestbook workload [frontend](https://cloud.google.com/kubernetes-engine/docs/tutorials/guestbook#setting_up_the_guestbook_web_frontend).

# Acknowledgements

This image Docker image is inspired on the work of [Jay Beale](https://github.com/JayBeale) with the series of episodes (particularly [Episode 1]()) addressing the topic of *attacking and defending Kubernetes*.

# Other references
* https://github.com/GoogleCloudPlatform/kubernetes-engine-samples/blob/master/guestbook/php-redis/Dockerfile