<section class="section-container related">

    <h2 class="section_title">Related Posts:</h2>
    <hr class="section-separator">

    <ul class="related-list">

        @foreach($relatedPosts as $post)

        <li>
            <article class="related-item">
                <h3 class="related-title">{{$post['title']}}</h3>
                <img class="related-img" src="{{$post['images']['url_1']}}" alt="post_image">
            </article>

        </li>

        @endforeach

    </ul>

</section>

<hr class="section-separator">