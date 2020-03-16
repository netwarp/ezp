{% extends './layouts/app.volt' %}

{% block content %}
    <div class="container">
        <div class="col">
            <div class="card">
                <video id="my-video" class="video-js" controls preload="auto" width="100%" height="480" poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                    <source src="MY_VIDEO.mp4" type="video/mp4" />
                    <source src="MY_VIDEO.webm" type="video/webm" />
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
                <div class="card-body">
                    <h1>Watch {{ id }} {{ title }}</h1>
                    <div>
                        {{ nb_views }} views
                    </div>
                    <div class="tags">
                        <a href="#" class="tag">#toto</a>
                        <a href="#" class="tag">#toto</a>
                        <a href="#" class="tag">#toto</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col recommends">
            <div class="card">
                <div class="card-body">
                    {% for i in [0, 0,0,0,0,0,0,0,0,0,0] %}
                    <div class="recommend">
                        <div class="thumbs">
                            <img src="" alt="">
                        </div>
                        <div class="data">
                            <div class="title">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates.
                            </div>
                            <div class="nb_views">
                                100 000
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>

    <!--
    <script src="https://vjs.zencdn.net/7.6.6/video.js"></script>
     -->
{% endblock %}