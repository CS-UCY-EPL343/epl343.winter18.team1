<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
	    return view('pages.index_new');
	}

	public function getAbout() {
	    return view('pages.about_us');
	}

	public function getBuyRent() {
	    return view('pages.buy-rent');
	}

	public function getContact() {
	    return view('pages.contact-us_new');
	}

	public function getNews() {
	    return view('pages.news');
	}

	public function getSellLet() {
	    return view('pages.sell-rent');
	}

	public function getSellLetUpdate() {
	    return view('pages.notifications');
	}

	public function getNotifications() {
	    return view('pages.notifications');
	}

	public function getSellLetDestroy(){
		return view('pages.notifications');
	}

	public function getCustomers() {
	    return view('pages.customers');
	}

	public function getCustomersUpdate() {
	    return view('pages.customers');
	}

	public function getCustomersDestroy() {
	    return view('pages.customers');
	}

	public function getCustomersAdd() {
	    return view('pages.customers');
	}

	public function getStatistics() {
	    return view('pages.statistics');
	}

	public function getIsAdminAttribute(){
    return true;
	}

	public function getEmployees() {
	    return view('pages.employees');
	}

	public function getEmployeesUpdate() {
	    return view('pages.employees');
	}

	public function getEmployeesDestroy() {
	    return view('pages.employees');
	}

	public function getCollaborators() {
	    return view('pages.collaborators');
	}

	public function getCollaboratorsUpdate() {
	    return view('pages.collaborators');
	}

	public function getCollaboratorsDestroy() {
	    return view('pages.collaborators');
	}

	public function getTermsAndConditions() {
	    return view('pages.TermsAndConditions');
	}
	public function getPrivacyPolicy() {
	    return view('pages.PrivacyPolicy');
	}

	public function getAdminController() {
	    return view('pages.owa_adminController');
	}
	public function getowa_controller() {
	    return view('pages.owa_controller');
	}

	public function getTest() {
	    return view('pages.index');
	}



}
