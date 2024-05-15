<div class="ProjectSearch-result Card">
    <div class="ProjectSearch-header">
        <div class="ProjectSearch-header-sort">
            <select id="table-sort-select" name="table-sort" class="default-select SectionJobFilter-header-select">
                <option value="newest" {{ $sort == 'newest' ? 'selected' : '' }}>Tin mới nhất</option>
                <option value="budget_min" {{ $sort == 'budget_min' ? 'selected' : '' }}>Giá thấp nhất</option>
                <option value="budget_max" {{ $sort == 'budget_max' ? 'selected' : '' }}>Giá cao nhất</option>
            </select>
        </div>
        <div class="ProjectSearch-header-info">
            <span id="total-results">{{$total}}</span>
            <span id="keyword-results"></span> bài đăng được tìm thấy
        </div>
        <div id="filter-btn" class="ProjectSearch-header-setting">
        </div>
        {{ $posts->withPath('/')->appends(['category' => $categoryId, 'search_keyword' => $searchKeyword])->links('pagination') }}
    </div>
    <div class="ProjectSearch-content">
        <div id="posts-list" class="JobSearchCard-list">
            @foreach ($posts as $post)
            <div class="JobSearchCard-item ">
                <div class="JobSearchCard-item-inner" data-project-card="true">
                    <div class="JobSearchCard-primary">
                    <div class="JobSearchCard-primary-tags" data-qtsb-section="page-job-search-new" data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

<a class="JobSearchCard-primary-tagsLink" href="/?category={{ $post->category->id }}">{{ $post->category->name }}</a>

</div>
                        <div class="JobSearchCard-primary-heading" style="display:flex">

                            <!-- <span class="Icon JobSearchCard-primary-heading-Icon">
                                <svg viewBox="0 0 24 24" class="flicon-trophy">
                                    <g fill="none">
                                        <title>Trophy icon</title>
                                        <path d="M11.968 3.5l1 2h2L13.35 6.735 13.97 9l-2-1.5-2 1.5.794-2.265L8.968 5.5h2M5.125 10.5c-5 0-4.622-6.62-4.622-8h2.534M18.847 10.5c5 0 4.65-6.62 4.65-8l-2.548.008">
                                        </path>
                                        <path d="M21.003.5h-18c0 15.434 7.965 11.054 7.965 16.5-.062 3.5-1.704 4.5-4.465 4.5v2h11v-2c-2.762 0-4.535-1-4.535-4.5 0-5.453 8.035-1.13 8.035-16.5z">
                                        </path>
                                    </g>
                                </svg>
                            </span> -->
                            
                            <div class="JobSearchCard-primary-tags" data-qtsb-section="page-job-search-new" data-qtsb-subsection="card-job" data-qtsb-label="link-skill">

                            <a href="/posts/details/{{$post->id}}" class="JobSearchCard-primary-heading-link" data-qtsb-section="page-job-search-new" data-qtsb-subsection="card-job" data-qtsb-label="link-project-title" data-heading-link="true">
                                {{($post->is_validated ==1)?$post->domain:$post->title}} | 
                            </a>
                            
                            </div>
                           

                                <div class="JobSearchCard-primary-price">
                                {{ number_format($post->min_price, 0, '', '.') }} đ
                                @if(!empty($post->max_price))
                                - {{ number_format($post->max_price, 0, '', '.') }} đ
                                @endif
                                </div>

                        </div>
                        @if ($post->is_validated  == 1)
                            <div class="JobSearchCard-primary-heading-status Tooltip--top" style="color:blue;margin-right: 10px;margin-bottom: 10px;" data-tooltip="This user has verified their Payment method">
                                <span class="Icon " style="fill:blue"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <g>
                                            <path d="M20 2c0-1.104-.896-2-2-2H2C.897 0 0 .896 0 2v2h20V2zM19 14c.34 0 .668.036.99.09.002-.03.01-.06.01-.09V6H0v8c0 1.102.897 2 2 2h12.537c1.1-1.225 2.69-2 4.463-2zM8 13H3v-2h5v2zm2-3H3V8h7v2zm3-2h4v2h-4V8zM22.293 16.293L18 20.587l-2.293-2.294-1.414 1.413L18 23.416l5.707-5.71">
                                            </path>
                                        </g>
                                    </svg></span> Verified
                            </div>
                            @endif

                            @if ($post->is_prestige)
                            <div class="JobSearchCard-primary-heading-status Tooltip--top" style="margin-bottom: 10px;" data-tooltip="This user has verified their Payment method">
                                <span class="Icon is-success"><svg class="Icon-image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <g>
                                            <path d="M20 2c0-1.104-.896-2-2-2H2C.897 0 0 .896 0 2v2h20V2zM19 14c.34 0 .668.036.99.09.002-.03.01-.06.01-.09V6H0v8c0 1.102.897 2 2 2h12.537c1.1-1.225 2.69-2 4.463-2zM8 13H3v-2h5v2zm2-3H3V8h7v2zm3-2h4v2h-4V8zM22.293 16.293L18 20.587l-2.293-2.294-1.414 1.413L18 23.416l5.707-5.71">
                                            </path>
                                        </g>
                                    </svg></span> UY TÍN
                            </div>
                            @endif
                        <p class="JobSearchCard-primary-description">
                            {{$post->demo}}
                        </p>

                        <div class="JobSearchCard-primary-heading-days">Người đăng:
                            <a href="/?created_user={{$post->createdUser->id}}">
                                {{$post->createdUser->username}}
                            </a>
                        </div>
                      
                        <span class="JobSearchCard-primary-heading-days">{{ $post->getGapTime() }}</span>

                        <!-- <div class="JobSearchCard-primary-promotion">
                            <span class="promotion-tag promotion-guaranteed JobSearchCard-primary-promotion-tag">Đảm
                                bảo</span>
                        </div> -->
                    </div>
                    <div class="JobSearchCard-secondary">
                        <div class="JobSearchCard-secondary-price">
                            {{ number_format($post->min_price, 0, '', '.') }} đ
                            @if(!empty($post->max_price))
                            - {{ number_format($post->max_price, 0, '', '.') }} đ
                            @endif
                        </div>
                        <div class="JobSearchCard-ctas ">
                            <a href="/posts/details/{{$post->id}}" class="JobSearchCard-ctas-btn btn btn-mini btn-success" data-qtsb-section="page-job-search-new" data-qtsb-subsection="card-cta-button" data-qtsb-label="enter-cta">
                                Enter now </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $posts->withPath('/')->appends(['category' => $categoryId, 'search_keyword' => $searchKeyword])->links('pagination') }}
        </div>
    </div>
</div>