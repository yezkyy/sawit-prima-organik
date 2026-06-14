@extends('layouts.app')

@section('title', 'Testimoni - Sawit Prima Organik')

@section('content')
    <!-- Header -->
    <section class="relative bg-primary pt-48 pb-32 overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-10 bg-pattern"></div>
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/10 rounded-full blur-[120px] -mr-32 -mt-32"></div>
        
        <div class="container-custom relative z-10 text-white text-center">
            <div data-aos="zoom-in">
                <div class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-xs font-bold uppercase tracking-widest text-accent mb-8">Testimonials</div>
                <h1 class="hero-title mb-8">Suara <span class="text-gradient-gold">Petani</span> Indonesia</h1>
                <p class="text-xl text-white/70 max-w-2xl mx-auto leading-relaxed">
                    Kisah sukses dan pengalaman nyata dari mereka yang telah merasakan manfaat langsung dari teknologi Sawit Prima Organik.
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonial Grid -->
    <section class="section-padding bg-background">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up">
                @forelse($testimonials as $t)
                    <div class="bg-white p-10 rounded-[2rem] shadow-soft border border-gray-100 hover:border-primary/20 transition-all duration-500 flex flex-col">
                        <div class="flex text-accent gap-1 mb-8">
                            @for($i=0; $i<5; $i++)
                                <i class="fas fa-star text-sm"></i>
                            @endfor
                        </div>
                        <blockquote class="text-lg text-dark/70 italic mb-10 flex-grow leading-relaxed">
                            "{{ $t->content }}"
                        </blockquote>
                        <div class="flex items-center gap-5 pt-8 border-t border-gray-100">
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 overflow-hidden shadow-inner flex-shrink-0 flex items-center justify-center text-primary text-xl">
                                @if(isset($t->image) && $t->image)
                                    <img src="{{ asset('storage/' . $t->image) }}" alt="{{ $t->name }}" class="w-full h-full object-cover">
                                @else
                                    <i class="fas fa-user"></i>
                                @endif
                            </div>
                            <div>
                                <h5 class="font-bold text-primary text-lg leading-tight">{{ $t->name }}</h5>
                                <p class="text-sm text-gray-500 font-medium">{{ $t->location }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-1 md:col-span-2 lg:col-span-3 flex flex-col items-center justify-center py-24 px-4 bg-white rounded-[2rem] shadow-sm border border-gray-100">
                        <div class="w-24 h-24 bg-primary/5 rounded-full flex items-center justify-center text-primary text-4xl mb-6">
                            <i class="fa-regular fa-comments"></i>
                        </div>
                        <h4 class="text-2xl font-bold text-primary mb-2 text-center">Belum Ada Testimoni</h4>
                        <p class="text-gray-500 text-center max-w-md">Kisah sukses dari mitra petani kami akan ditampilkan di sini. Jadilah bagian dari mereka!</p>
                    </div>
                @endforelse
            </div>
            
            @if($testimonials->count() > 0)
                <div class="mt-16 flex justify-center">
                    {{ $testimonials->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection