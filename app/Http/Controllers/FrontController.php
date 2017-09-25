<?php

namespace budprirodi\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
		public function index() {
			return 'index page';
		}
		public function products() {
			return 'products page';
		}
		public function product_details($id) {
			return 'product details page id = '.$id;
		}
		public function product_catigories() {
			return 'product catigories page';
		}
		public function product_brands() {
			return 'products brands page';
		}
		public function blog() {
				return 'blog page';
		}
		public function blog_post($id) {
				return 'blog post page '.$id;
		}
		public function contact_us() {
				return 'contact us page';
		}
		public function login() {
				return 'login page';
		}
		public function logout() {
				return 'logout page';
		}
		public function cart() {
				return 'cart page';
		}
		public function checkout() {
				return 'checkout page';
		}
		public function search($query) {
				return "$query search page";
		}
}
