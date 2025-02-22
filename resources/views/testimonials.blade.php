<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body>
<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600">Testimonials</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">We have worked with thousands of amazing people</p>
        </div>
        <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
            <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
                @foreach($testimonials as $testimonial)
                    <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                        <figure class="rounded-2xl bg-gray-50 p-8 text-sm/6">
                            <blockquote class="text-gray-900">
                                <p>“{{$testimonial->body}}”</p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <img class="size-10 rounded-full bg-gray-50" src="https://ui-avatars.com/api/?name={{$testimonial->name}}" alt="">
                                <div>
                                    <div class="font-semibold text-gray-900">{{$testimonial->name}}</div>
                                    <div class="text-gray-600">{{$testimonial->email}}</div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach



                <!-- More testimonials... -->
            </div>
        </div>
    </div>
</div>

</body>
</html>
