{% extends './layouts/app.volt' %}

{% block content %}
    <div class="previews">
        {% for video in videos %}
            <div class="card preview">
                <div class="card-img">
                    <a href="{{ video['link'] }}">
                        <img src="#" alt="">
                    </a>
                </div>
                <div class="card-body">
                    <div class="title-preview">
                        <a href="{{ video['link'] }}">
                            {{ video['title'] }}
                        </a>
                    </div>
                    <div class="nb-views-preview">
                        <a href="{{ video['link'] }}">
                            {{ video['nb_views'] }}
                        </a>
                    </div>
                </div>
            </div>
        {% endfor %}
	</div>

	<div class="pagination-wrapper">
        <a href="./?page=1" class="pagination active">1</a>
        <a href="./?page2" class="pagination">1</a>
        <a href="#" class="pagination">1</a>
        <a href="#" class="pagination">1</a>
        <a href="#" class="pagination">1</a>
        <a href="#" class="pagination">1</a>
        <a href="#" class="pagination">1</a>
        <a href="#" class="pagination">1</a>
        <a href="#" class="pagination">1</a>
	</div>
{% endblock %}