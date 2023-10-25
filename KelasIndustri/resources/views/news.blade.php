{{-- NewsPage --}}
@extends('layouts.layoutnews')
@section('content')
    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="blog-post california">
                        <div class="row">
                            <div class="col">
                                <div class="post-content detail-content">
                                    @if (isset($newsImage))
                                        <div class="text-center">
                                            <h1 class="post-title pt-5 ">
                                                {{ $newsImage->title }}
                                            </h1>
                                            <div class="row justify-content-center mb-2 mt-4">
                                                <div class="col-auto px-3">
                                                    <small class="text-muted">
                                                        {{ \Carbon\Carbon::parse($newsImage->date)->format('j F Y') }}
                                                        &nbsp;&nbsp; | &nbsp;&nbsp;
                                                        {{ $newsImage->created_at->format('H:i') }} WIB
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-auto mx-auto">
                                                    <div class="author-info-box">
                                                        <div class="content px-2">
                                                            <div class="d-flex flex-column h-100 justify-content-center">
                                                                <small class="d-block fw-medium" style="max-width: 500px">
                                                                    PLN Icon+
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="mt-20 mb-40" />
                                            <div class="has-dropcap"
                                                style="overflow-wrap: break-word; word-wrap: break-word; word-break: break-word;">
                                                @if (isset($newsImage->picture))
                                                    <img src="{{ asset('uploads/' . $newsImage->picture) }}"
                                                        alt="{{ $newsImage->title }}" class="mb-2" style="width:100%" />
                                                @endif
                                                @php
                                                    $content = $newsImage->contentnews;
                                                    $paragraphs = explode("\n", $content);
                                                @endphp

                                                @foreach ($paragraphs as $paragraph)
                                                    <p class="text-start">{{ $paragraph }}</p>
                                                @endforeach
                                                <p class="text-start">Source:
                                                    <a href="{{ $newsImage->source }}" target="_blank"
                                                        rel="noopener noreferrer">{{ $newsImage->source }}</a>
                                                </p>
                                            </div>
                                            <h5 class="fw-semibold">Share to : </h5>
                                            <div id="shareRoundIcons"></div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
