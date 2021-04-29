<div class="left_side_title_top">@lang('index.БЫСТРЫЕ ССЫЛКИ')</div>
                                <div>
                                    @foreach($links as $link)
                                    <a href="{{$link->slug}}" class="card-text"><i class="fas fa-angle-double-right text-secondary"></i>{{$link->$name_locale}}</a>
                                    @endforeach

                                </div>
