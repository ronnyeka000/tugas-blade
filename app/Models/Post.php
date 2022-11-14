<?php

namespace App\Models;


class Post 
{
    private static $about_posts = [
        [
            "judul" => "Tugas Pertama Web Programming",
            "author" => "Reinert Y Rumagit",
            "body" => "
            Berikut adalah tugas pertamanya,
            tugas kali ini adalah Buatlah suatu tampilan website menggunakan framework laravel feature blade sebagai berikut:
            Conditional Rendering [Pilih salah satu]
            
            1.@if, @elseif @endif
            
            2.@switch, @case, @break
            
            
            
            Loop Rendering
            
            3.@for, @while, @foreach, @forelse
            
            
            
            Reusable Component Tag [Wajib Menggunakan 1-4]
            
            1.@include
            
            2.@extends
            
            3.@yields
            
            4.@section"
        ],
        [
            "judul" => "Identitas",
            "author" => "Ronny Eka",
            "body" => "Halo, aku biasa dipanggil Ronny, mahasiswa Binus University, Jurusan Computer Science, semester 5"
        ]
    ];

    public static function all(){
        return self::$about_posts;
    }
}
