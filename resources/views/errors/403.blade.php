@extends('errors.layout')

@section('title', 'Akses Ditolak')
@section('code', '403')
@section('message', 'Anda tidak memiliki hak akses (permission) untuk membuka halaman ini.')
@section('icon', 'fa-shield-halved')
@section('color', 'bg-red-100')
@section('text-color', 'text-red-500')
@section('shadow-color', 'shadow-red-500/30')