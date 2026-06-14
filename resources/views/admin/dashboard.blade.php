@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <!-- Welcome Banner -->
    <div class="mb-8 rounded-3xl bg-primary overflow-hidden relative spotlight shadow-xl">
        <div class="absolute inset-0 bg-pattern"></div>
        <div class="relative z-10 px-8 py-10 md:py-12 md:px-12 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-white max-w-2xl">
                <h1 class="font-heading text-3xl md:text-4xl font-bold mb-3">Selamat Datang, {{ Auth::user()->name }}! 👋</h1>
                <p class="text-white/80 text-lg">Pantau dan kelola seluruh konten website Sawit Prima Organik dari satu tempat. Sistem berjalan optimal hari ini.</p>
            </div>
            <div class="hidden md:block shrink-0">
                <div class="w-32 h-32 bg-white/10 rounded-full flex items-center justify-center backdrop-blur-sm border border-white/20">
                    <i class="fa-solid fa-chart-pie text-5xl text-accentLight"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
        <!-- Banner Stat -->
        <div class="card-premium p-6 group hover:border-primary border border-transparent transition-colors">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-images text-2xl"></i>
                </div>
                <span class="text-xs font-bold px-3 py-1 bg-green-50 text-green-600 rounded-full flex items-center gap-1">
                    <i class="fa-solid fa-arrow-up"></i> Aktif
                </span>
            </div>
            <div>
                <h3 class="text-3xl font-bold text-gray-900 mb-1 counter-value" x-data="{ count: 0 }" x-init="let target = {{ $stats['banners'] ?? 0 }}; let step = target / 20; let interval = setInterval(() => { count += step; if(count >= target) { count = target; clearInterval(interval); } }, 30);" x-text="Math.round(count)">0</h3>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Total Banner</p>
            </div>
        </div>

        <!-- Gallery Stat -->
        <div class="card-premium p-6 group hover:border-primary border border-transparent transition-colors">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-image text-2xl"></i>
                </div>
                <span class="text-xs font-bold px-3 py-1 bg-green-50 text-green-600 rounded-full flex items-center gap-1">
                    <i class="fa-solid fa-arrow-up"></i> Aktif
                </span>
            </div>
            <div>
                <h3 class="text-3xl font-bold text-gray-900 mb-1 counter-value" x-data="{ count: 0 }" x-init="let target = {{ $stats['galleries'] ?? 0 }}; let step = target / 20; let interval = setInterval(() => { count += step; if(count >= target) { count = target; clearInterval(interval); } }, 30);" x-text="Math.round(count)">0</h3>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Total Galeri</p>
            </div>
        </div>

        <!-- Testimonial Stat -->
        <div class="card-premium p-6 group hover:border-primary border border-transparent transition-colors">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-accent/10 text-accent rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-comments text-2xl"></i>
                </div>
                <span class="text-xs font-bold px-3 py-1 bg-green-50 text-green-600 rounded-full flex items-center gap-1">
                    <i class="fa-solid fa-arrow-up"></i> Aktif
                </span>
            </div>
            <div>
                <h3 class="text-3xl font-bold text-gray-900 mb-1 counter-value" x-data="{ count: 0 }" x-init="let target = {{ $stats['testimonials'] ?? 0 }}; let step = target / 20; let interval = setInterval(() => { count += step; if(count >= target) { count = target; clearInterval(interval); } }, 30);" x-text="Math.round(count)">0</h3>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Total Testimoni</p>
            </div>
        </div>

        <!-- System Stat -->
        <div class="card-premium p-6 group hover:border-primary border border-transparent transition-colors">
            <div class="flex items-center justify-between mb-4">
                <div class="w-14 h-14 bg-green-50 text-primary rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-server text-2xl"></i>
                </div>
                <span class="flex h-3 w-3">
                    <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                </span>
            </div>
            <div>
                <h3 class="text-xl font-bold text-gray-900 mb-1 pt-1">Online</h3>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Status Sistem</p>
            </div>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="grid grid-cols-1 gap-8" x-data="dashboardChart()">
        <div class="bg-white rounded-[2rem] p-8 shadow-sm border border-gray-100">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                <div>
                    <h3 class="font-heading text-xl font-bold text-gray-900">Statistik Konten</h3>
                    <p class="text-sm text-gray-500">Visualisasi pertumbuhan data Banner, Galeri, dan Testimoni.</p>
                </div>
                
                <!-- Filter AlpineJS -->
                <div class="flex items-center gap-2 bg-gray-50 p-1 rounded-xl border border-gray-200">
                    <button @click="filterData('all')" 
                            :class="filter === 'all' ? 'bg-white text-primary shadow-sm' : 'text-gray-500 hover:text-gray-900'"
                            class="px-4 py-2 rounded-lg text-xs font-bold transition-all">Semua</button>
                    <button @click="filterData('banner')" 
                            :class="filter === 'banner' ? 'bg-white text-primary shadow-sm' : 'text-gray-500 hover:text-gray-900'"
                            class="px-4 py-2 rounded-lg text-xs font-bold transition-all">Banner</button>
                    <button @click="filterData('gallery')" 
                            :class="filter === 'gallery' ? 'bg-white text-primary shadow-sm' : 'text-gray-500 hover:text-gray-900'"
                            class="px-4 py-2 rounded-lg text-xs font-bold transition-all">Galeri</button>
                    <button @click="filterData('testimonial')" 
                            :class="filter === 'testimonial' ? 'bg-white text-primary shadow-sm' : 'text-gray-500 hover:text-gray-900'"
                            class="px-4 py-2 rounded-lg text-xs font-bold transition-all">Testimoni</button>
                </div>
            </div>

            <div class="relative w-full h-[400px]">
                <canvas id="mainChart"></canvas>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function dashboardChart() {
            return {
                filter: 'all',
                chart: null,
                allDatasets: [
                    {
                        label: 'Banner',
                        data: {{ json_encode($chartData['banners']) }},
                        borderColor: '#3b82f6',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        fill: true,
                        tension: 0.4
                    },
                    {
                        label: 'Galeri',
                        data: {{ json_encode($chartData['galleries']) }},
                        borderColor: '#8b5cf6',
                        backgroundColor: 'rgba(139, 92, 246, 0.1)',
                        fill: true,
                        tension: 0.4
                    },
                    {
                        label: 'Testimoni',
                        data: {{ json_encode($chartData['testimonials']) }},
                        borderColor: '#D8A320',
                        backgroundColor: 'rgba(216, 163, 32, 0.1)',
                        fill: true,
                        tension: 0.4
                    }
                ],
                init() {
                    this.renderChart();
                },
                filterData(type) {
                    this.filter = type;
                    this.renderChart();
                },
                renderChart() {
                    const ctx = document.getElementById('mainChart').getContext('2d');
                    
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    let filteredDatasets = [];
                    if (this.filter === 'all') {
                        filteredDatasets = this.allDatasets;
                    } else {
                        const mapping = {
                            'banner': 'Banner',
                            'gallery': 'Galeri',
                            'testimonial': 'Testimoni'
                        };
                        filteredDatasets = this.allDatasets.filter(ds => ds.label === mapping[this.filter]);
                    }

                    this.chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: {!! json_encode($chartData['labels']) !!},
                            datasets: filteredDatasets
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            animation: {
                                duration: 500
                            },
                            interaction: {
                                intersect: false,
                                mode: 'index',
                            },
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    grid: {
                                        drawBorder: false,
                                        color: 'rgba(0, 0, 0, 0.05)'
                                    },
                                    ticks: {
                                        stepSize: 1
                                    }
                                },
                                x: {
                                    grid: {
                                        display: false
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                },
                                tooltip: {
                                    backgroundColor: '#fff',
                                    titleColor: '#111827',
                                    bodyColor: '#4b5563',
                                    borderColor: '#e5e7eb',
                                    borderWidth: 1,
                                    padding: 12,
                                    boxPadding: 6,
                                    usePointStyle: true,
                                }
                            },
                            elements: {
                                point: {
                                    radius: 4,
                                    hoverRadius: 6
                                }
                            }
                        }
                    });
                }
            }
        }
    </script>
    @endpush
@endsection