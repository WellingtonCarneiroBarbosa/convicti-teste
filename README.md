# Convicti Test App

---

## Installation

<ol> 
    <li>Clone the project: <pre>git clone https://github.com/wellingtoncarneirobarbosa/convicti-app-test.git && cd convicti-app-test</pre></li>
    <li>If you don't have composer installed, run the following script: <pre>docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs</pre>
    </li>
    <li>Run the following script to start the containers: <pre>./vendor/bin/sail up -d</pre></li>
    <li>Go to <a href="http://localhost" target="blank">http://localhost</a> and voa-lá!</li>
</ol>
