@extends('errors.layout')

@section('title', 'Kesalahan Server')
@section('code', '500')
@section('message', 'Ups! Terjadi kesalahan internal pada server. Tim teknis kami sedang memperbaikinya.')
@section('icon', 'fa-server')
@section('color', 'bg-purple-100')
@section('text-color', 'text-purple-500')
@section('shadow-color', 'shadow-purple-500/30')