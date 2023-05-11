@extends('layouts.admin.master')

@section('title')Basic Init
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Basic DataTables</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Data Tables</li>
		<li class="breadcrumb-item active">Basic Init</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <!-- Zero Configuration  Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Zero Configuration</h5>
	                    <span>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code>.</span>
	                    <span>Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Zero Configuration  Ends-->
	        <!-- Feature Unable /Disable Order Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Feature Unable /Disable</h5>
	                    <span>Disabling features that you don't wish to use for a particular table is easily done by setting a variable in the initialisation object</span>
	                    <span>In the following example only the search feature is left enabled (which it is by default).</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-2">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Feature Unable /Disable Ends-->
	        <!-- Default ordering (sorting) Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Default ordering (sorting)</h5>
	                    <span>
	                        With DataTables you can alter the ordering characteristics of the table at initialisation time. Using the <code class="option" title="DataTables initialisation option">order:option</code> initialisation parameter,
	                        you can set the table to display the data in exactly the order that you want.
	                    </span>
	                    <span>
	                        The<code class="option" title="DataTables initialisation option">order:Option</code> parameter is an array of arrays where the first value of the inner array is the column to order on, and the second is
	                        <code class="string" title="String">'asc':String</code> (ascending ordering) or <code class="string" title="String">'desc':String</code> (descending ordering) as required.
	                        <code class="option" title="DataTables initialisation option">order:String</code> is a 2D array to allow multi-column ordering to be defined.
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display dataTable" id="basic-3">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Default ordering (sorting) Ends-->
	        <!-- Multi-Column Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Multi-column ordering</h5>
	                    <span>DataTables allows ordering by multiple columns at the same time, which can be activated in a number of different ways:</span>
	                    <span>User shift click on a column (added the clicked column as a secondary, tertiary etc ordering column).</span>
	                    <span>On a per-column basis (i.e. order by a specific column and then a secondary column if the data in the first column is identical), through the<code>columns.orderData option.</code></span>
	                    <span>Using the <code>columns.orderData option</code>option to specify a multiple column order by default (for example [ 0, 1 ]).</span><span>Through the <code>order() API </code>API method.</span>
	                    <span>Note that, the ability for the user to shift click to order multiple columns can be disabled through the <code>orderMulti option</code>option.</span>
	                    <span>
	                        The example below shows the first column having a secondary order applied to the second column in the table, vice-versa for the second column being tied directly to the first and the salary column to the first name
	                        column.
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-4">
	                            <thead>
	                                <tr>
	                                    <th>First name</th>
	                                    <th>Last name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger</td>
	                                    <td>Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett</td>
	                                    <td>Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton</td>
	                                    <td>Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric</td>
	                                    <td>Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi</td>
	                                    <td>Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle</td>
	                                    <td>Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod</td>
	                                    <td>Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona</td>
	                                    <td>Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen</td>
	                                    <td>Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya</td>
	                                    <td>Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena</td>
	                                    <td>Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn</td>
	                                    <td>Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde</td>
	                                    <td>Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley</td>
	                                    <td>Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana</td>
	                                    <td>Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael</td>
	                                    <td>Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul</td>
	                                    <td>Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria</td>
	                                    <td>Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley</td>
	                                    <td>Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai</td>
	                                    <td>Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette</td>
	                                    <td>Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri</td>
	                                    <td>Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar</td>
	                                    <td>Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris</td>
	                                    <td>Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica</td>
	                                    <td>Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin</td>
	                                    <td>Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer</td>
	                                    <td>Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden</td>
	                                    <td>Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona</td>
	                                    <td>Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou</td>
	                                    <td>Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle</td>
	                                    <td>House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki</td>
	                                    <td>Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott</td>
	                                    <td>Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin</td>
	                                    <td>Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena</td>
	                                    <td>Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity</td>
	                                    <td>Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard</td>
	                                    <td>Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope</td>
	                                    <td>Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian</td>
	                                    <td>Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy</td>
	                                    <td>Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson</td>
	                                    <td>Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia</td>
	                                    <td>Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno</td>
	                                    <td>Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura</td>
	                                    <td>Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor</td>
	                                    <td>Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn</td>
	                                    <td>Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge</td>
	                                    <td>Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida</td>
	                                    <td>Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita</td>
	                                    <td>Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer</td>
	                                    <td>Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara</td>
	                                    <td>Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione</td>
	                                    <td>Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael</td>
	                                    <td>Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas</td>
	                                    <td>Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad</td>
	                                    <td>Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael</td>
	                                    <td>Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna</td>
	                                    <td>Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Multi-Column Ends-->
	        <!-- Multiple tables Start-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Multiple tables</h5>
	                    <span>Often you might wish to initialise multiple tables with a single statement. This is trivially done by using a jQuery selector which will pick up multiple tables.</span>
	                    <span>
	                        The tables are independent for user control (i.e. user controlled paging on one table does not effect the others), but they do share the initialisation parameters given (for example if you specific the Spanish
	                        language file, all tables will be shown in Spanish). Additionally, the API can be used to manipulate both together, or independently.
	                    </span>
	                    <span>
	                        The example below shows two tables initialised with a single line of code, through the use of the table.display selector (i.e. select all elements which have the class of table.display (which is suitable in this
	                        example, you might wish to use a different selector).
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="show-case">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>$183,000</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                        <table class="show-case">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>$103,500</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Multiple tables Ends-->
	        <!-- Hidden Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Hidden columns</h5>
	                    <span>
	                        There are times when you might find it useful to display only a sub-set of the information that was available in the original table. For example you might want to reduce the amount of data shown on screen to make it
	                        clearer for the user (consider also using the Responsive extension for this). This is done through the<code> columns.visible column option</code>option.
	                    </span>
	                    <span>The column that is hidden is still part of the table and can be made visible through the api column().visible() API method at a future time if you wish to have columns which can be shown and hidden.</span>
	                    <span>Furthermore, as the hidden data is still part of the table, it can still, optionally, be filtered upon allowing the user access to that data (for example 'tag' information for a row entry might used).</span>
	                    <span>In the table below both the office and age version columns have been hidden, the former is not searchable, the latter is.</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-5">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Hidden Ends-->
	        <!-- Complex headers (rowspan and colspan) Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Complex headers (rowspan and colspan)</h5>
	                    <span>
	                        When using tables to display data, you will often wish to display column information in groups. DataTables fully supports <code>colspan</code> and<code>rowspan</code> in the table's header, assigning the required
	                        order listeners to the TH element suitable for that column.
	                    </span>
	                    <span>
	                        Each column must have one TH cell which is unique to it for the listeners to be added. By default DataTables will use the bottom unique cell for the column to attach the order listener, if more than one cell for a
	                        column if found. The <code class="option" title="DataTables initialisation option">orderCellsTop:option</code>option can be used to tell DataTables to use the top cell if you prefer.
	                    </span>
	                    <span>The example shown below has two sets of grouped information, grouped by colspan in the header.</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-6">
	                            <thead>
	                                <tr>
	                                    <th rowspan="2">Name</th>
	                                    <th colspan="2">HR Information</th>
	                                    <th colspan="3">Contact</th>
	                                </tr>
	                                <tr>
	                                    <th>Position</th>
	                                    <th>Salary</th>
	                                    <th>Office</th>
	                                    <th>Extn.</th>
	                                    <th>E-mail</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>$320,800</td>
	                                    <td>Edinburgh</td>
	                                    <td>5421</td>
	                                    <td>t.nixon@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>$170,750</td>
	                                    <td>Tokyo</td>
	                                    <td>8422</td>
	                                    <td>g.winters@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>$86,000</td>
	                                    <td>San Francisco</td>
	                                    <td>1562</td>
	                                    <td>a.cox@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>$433,060</td>
	                                    <td>Edinburgh</td>
	                                    <td>6224</td>
	                                    <td>c.kelly@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>$162,700</td>
	                                    <td>Tokyo</td>
	                                    <td>5407</td>
	                                    <td>a.satou@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>$372,000</td>
	                                    <td>New York</td>
	                                    <td>4804</td>
	                                    <td>b.williamson@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>$137,500</td>
	                                    <td>San Francisco</td>
	                                    <td>9608</td>
	                                    <td>h.chandler@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>$327,900</td>
	                                    <td>Tokyo</td>
	                                    <td>6200</td>
	                                    <td>r.davidson@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>$205,500</td>
	                                    <td>San Francisco</td>
	                                    <td>2360</td>
	                                    <td>c.hurst@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>$103,600</td>
	                                    <td>Edinburgh</td>
	                                    <td>1667</td>
	                                    <td>s.frost@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>$90,560</td>
	                                    <td>London</td>
	                                    <td>3814</td>
	                                    <td>j.gaines@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>$342,000</td>
	                                    <td>Edinburgh</td>
	                                    <td>9497</td>
	                                    <td>q.flynn@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>$470,600</td>
	                                    <td>San Francisco</td>
	                                    <td>6741</td>
	                                    <td>c.marshall@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>$313,500</td>
	                                    <td>London</td>
	                                    <td>3597</td>
	                                    <td>h.kennedy@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>$385,750</td>
	                                    <td>London</td>
	                                    <td>1965</td>
	                                    <td>t.fitzpatrick@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>$198,500</td>
	                                    <td>London</td>
	                                    <td>1581</td>
	                                    <td>m.silva@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>$725,000</td>
	                                    <td>New York</td>
	                                    <td>3059</td>
	                                    <td>p.byrd@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>$237,500</td>
	                                    <td>New York</td>
	                                    <td>1721</td>
	                                    <td>g.little@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>$132,000</td>
	                                    <td>London</td>
	                                    <td>2558</td>
	                                    <td>b.greer@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>$217,500</td>
	                                    <td>Edinburgh</td>
	                                    <td>2290</td>
	                                    <td>d.rios@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>$345,000</td>
	                                    <td>New York</td>
	                                    <td>1937</td>
	                                    <td>j.caldwell@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>$675,000</td>
	                                    <td>New York</td>
	                                    <td>6154</td>
	                                    <td>y.berry@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>$106,450</td>
	                                    <td>New York</td>
	                                    <td>8330</td>
	                                    <td>c.vance@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>$85,600</td>
	                                    <td>Sidney</td>
	                                    <td>3023</td>
	                                    <td>d.wilder@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>$1,200,000</td>
	                                    <td>London</td>
	                                    <td>5797</td>
	                                    <td>a.ramos@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>$92,575</td>
	                                    <td>Edinburgh</td>
	                                    <td>8822</td>
	                                    <td>g.joyce@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>$357,650</td>
	                                    <td>Singapore</td>
	                                    <td>9239</td>
	                                    <td>j.chang@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>$206,850</td>
	                                    <td>San Francisco</td>
	                                    <td>1314</td>
	                                    <td>b.wagner@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>$850,000</td>
	                                    <td>San Francisco</td>
	                                    <td>2947</td>
	                                    <td>f.green@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>$163,000</td>
	                                    <td>Tokyo</td>
	                                    <td>8899</td>
	                                    <td>s.itou@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>$95,400</td>
	                                    <td>Sidney</td>
	                                    <td>2769</td>
	                                    <td>m.house@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>$114,500</td>
	                                    <td>London</td>
	                                    <td>6832</td>
	                                    <td>s.burks@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>$145,000</td>
	                                    <td>London</td>
	                                    <td>3606</td>
	                                    <td>p.bartlett@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>$235,500</td>
	                                    <td>San Francisco</td>
	                                    <td>2860</td>
	                                    <td>g.cortez@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>$324,050</td>
	                                    <td>Edinburgh</td>
	                                    <td>8240</td>
	                                    <td>m.mccray@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>$85,675</td>
	                                    <td>San Francisco</td>
	                                    <td>5384</td>
	                                    <td>u.butler@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>$164,500</td>
	                                    <td>San Francisco</td>
	                                    <td>7031</td>
	                                    <td>h.hatfield@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>$109,850</td>
	                                    <td>San Francisco</td>
	                                    <td>6318</td>
	                                    <td>h.fuentes@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>$452,500</td>
	                                    <td>San Francisco</td>
	                                    <td>9422</td>
	                                    <td>v.harrell@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>$136,200</td>
	                                    <td>London</td>
	                                    <td>7580</td>
	                                    <td>t.mooney@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>$645,750</td>
	                                    <td>New York</td>
	                                    <td>1042</td>
	                                    <td>j.bradshaw@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>$234,500</td>
	                                    <td>Singapore</td>
	                                    <td>2120</td>
	                                    <td>o.liang@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>$163,500</td>
	                                    <td>London</td>
	                                    <td>6222</td>
	                                    <td>b.nash@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>$139,575</td>
	                                    <td>Tokyo</td>
	                                    <td>9383</td>
	                                    <td>s.yamamoto@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>$98,540</td>
	                                    <td>New York</td>
	                                    <td>8327</td>
	                                    <td>t.walton@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>$87,500</td>
	                                    <td>San Francisco</td>
	                                    <td>2927</td>
	                                    <td>f.camacho@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>$138,575</td>
	                                    <td>Singapore</td>
	                                    <td>8352</td>
	                                    <td>s.baldwin@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>$125,250</td>
	                                    <td>New York</td>
	                                    <td>7439</td>
	                                    <td>z.frank@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>$115,000</td>
	                                    <td>San Francisco</td>
	                                    <td>4389</td>
	                                    <td>z.serrano@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>$75,650</td>
	                                    <td>Edinburgh</td>
	                                    <td>3431</td>
	                                    <td>j.acosta@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>$145,600</td>
	                                    <td>New York</td>
	                                    <td>3990</td>
	                                    <td>c.stevens@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>$356,250</td>
	                                    <td>London</td>
	                                    <td>1016</td>
	                                    <td>h.butler@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>$103,500</td>
	                                    <td>London</td>
	                                    <td>6733</td>
	                                    <td>l.greer@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>$86,500</td>
	                                    <td>San Francisco</td>
	                                    <td>8196</td>
	                                    <td>j.alexander@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>$183,000</td>
	                                    <td>Edinburgh</td>
	                                    <td>6373</td>
	                                    <td>s.decker@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>$183,000</td>
	                                    <td>Singapore</td>
	                                    <td>5384</td>
	                                    <td>m.bruce@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>$112,000</td>
	                                    <td>New York</td>
	                                    <td>4226</td>
	                                    <td>d.snider@datatables.net</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Salary</th>
	                                    <th>Office</th>
	                                    <th>Extn.</th>
	                                    <th>E-mail</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Complex headers (rowspan and colspan) Ends-->
	        <!-- DOM Positioning Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>DOM Positioning</h5>
	                    <span>
	                        When customising DataTables for your own usage, you might find that the default position of the feature elements (filter input etc) is not quite to your liking. To address this issue DataTables takes inspiration from
	                        the CSS 3 Advanced Layout Module and provides the <code class="option" title="DataTables initialisation option">dom:option</code> initialisation parameter which can be set to indicate where you wish particular
	                        features to appear in the DOM. You can also specify <code>div</code> wrapping containers (with an id and / or class) to provide complete layout flexibility.
	                    </span>
	                    <span>
	                        Each HTML control element presented by DataTables is denoted by a single character in the <code class="option" title="DataTables initialisation option">dom:option</code> option. For example the <code>l</code> option
	                        is used for the <code>L</code>ength changing input option.
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-7">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- DOM positioning Ends-->
	        <!-- Flexible table width Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Flexible table width</h5>
	                    <span>
	                        Often you may want to have your table resize dynamically with the page. Typically this is done by assigning <code>width:100%</code> in your CSS, but this presents a problem for Javascript since it can be very hard to
	                        get that relative size rather than the absolute pixels. As such, if you apply the<code>width</code> attribute to the HTML table tag or inline width style (<code>style="width:100%"</code>), it will be used as the
	                        width for the table (overruling any CSS styles).
	                    </span>
	                    <span>This example shows a table with <code>width="80%"</code> and the container is also flexible width, so as the window is resized, the table will also resize dynamically.</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-8">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Flexible table width  Ends-->
	        <!-- State saving Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>State saving</h5>
	                    <span>
	                        DataTables has the option of being able to save the state of a table (its paging position, ordering state etc) so that is can be restored when the user reloads a page, or comes back to the page after visiting a
	                        sub-page. This state saving ability is enabled by the <code class="option" title="DataTables initialisation option">stateSave</code> option.
	                    </span>
	                    <span>
	                        The built in state saving method uses the HTML5 <code>localStorage</code> and <code>sessionStorage</code> APIs for efficient storage of the data. Please note that this means that the built in state saving option
	                        <strong>will not work with IE6/7</strong> as these browsers do not support these APIs. Alternative options of using cookies or saving the state on the server through Ajax can be used through the
	                        <code class="option" title="DataTables initialisation option">stateSaveCallback</code> and
	                        <a href="//datatables.net/reference/option/stateLoadCallback"><code class="option" title="DataTables initialisation option">stateLoadCallback</code></a> options.
	                    </span>
	                    <span>
	                        The duration for which the saved state is valid and can be used to restore the table state can be set using the <code class="option" title="DataTables initialisation option">stateDuration</code> initialisation
	                        parameter (2 hours by default). This parameter also controls if <code>localStorage</code> (0 or greater) or <code>sessionStorage</code> (-1) is used to store the data.
	                    </span>
	                    <span>The example below simply shows state saving enabled in DataTables with the <code class="option" title="DataTables initialisation option">stateSave</code> option.</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-9">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- State saving Ends-->
	        <!-- Alternative pagination Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Alternative pagination</h5>
	                    <span>
	                        The default page control presented by DataTables (forward and backward buttons with up to 7 page numbers in-between) is fine for most situations, but there are cases where you may wish to customise the options
	                        presented to the end user. This is done through DataTables' extensible pagination mechanism, the pagingType option.
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-10">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Alternative pagination Ends-->
	        <!-- Scroll - vertical Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Scroll - vertical</h5>
	                    <span>
	                        This example shows the DataTables table body scrolling in the vertical direction. This can generally be seen as an alternative method to pagination for displaying a large table in a fairly small vertical area, and as
	                        such pagination has been disabled here (note that this is not mandatory, it will work just fine with pagination enabled as well!).
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-11">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Scroll - vertical Ends-->
	        <!-- Scroll - vertical dynamic Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Scroll - vertical, dynamic height</h5>
	                    <span>
	                        This example shows a vertically scrolling DataTable that makes use of the CSS3 vh unit in order to dynamically resize the viewport based on the browser window height. The vh unit is effectively a percentage of the
	                        browser window height. So the 50vh used in this example is 50% of the window height. The viewport size will update dynamically as the window is resized.
	                    </span>
	                    <span>A relatively modern browser is required for vh units to operate correctly. IE9+ supports the vh unit and all other evergreen browsers.</span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-12">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Scroll - vertical dynamic Ends-->
	        <!-- Scroll - horizontal Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Scroll - horizontal and vertical</h5>
	                    <span>In this example you can see DataTables doing both horizontal and vertical scrolling at the same time. Note also that pagination is enabled in this example, and the scrolling accounts for this.</span>
	                </div>
	                <div class="card-body">
	                    <div>
	                        <table class="display nowrap" id="basic-13" style="width: 100%;">
	                            <thead>
	                                <tr>
	                                    <th>First name</th>
	                                    <th>Last name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                    <th>Extn.</th>
	                                    <th>E-mail</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger</td>
	                                    <td>Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320,800</td>
	                                    <td>5421</td>
	                                    <td>t.nixon@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett</td>
	                                    <td>Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170,750</td>
	                                    <td>8422</td>
	                                    <td>g.winters@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton</td>
	                                    <td>Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86,000</td>
	                                    <td>1562</td>
	                                    <td>a.cox@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric</td>
	                                    <td>Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433,060</td>
	                                    <td>6224</td>
	                                    <td>c.kelly@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi</td>
	                                    <td>Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162,700</td>
	                                    <td>5407</td>
	                                    <td>a.satou@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle</td>
	                                    <td>Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372,000</td>
	                                    <td>4804</td>
	                                    <td>b.williamson@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod</td>
	                                    <td>Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137,500</td>
	                                    <td>9608</td>
	                                    <td>h.chandler@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona</td>
	                                    <td>Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327,900</td>
	                                    <td>6200</td>
	                                    <td>r.davidson@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen</td>
	                                    <td>Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205,500</td>
	                                    <td>2360</td>
	                                    <td>c.hurst@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya</td>
	                                    <td>Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103,600</td>
	                                    <td>1667</td>
	                                    <td>s.frost@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena</td>
	                                    <td>Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90,560</td>
	                                    <td>3814</td>
	                                    <td>j.gaines@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn</td>
	                                    <td>Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342,000</td>
	                                    <td>9497</td>
	                                    <td>q.flynn@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde</td>
	                                    <td>Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470,600</td>
	                                    <td>6741</td>
	                                    <td>c.marshall@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley</td>
	                                    <td>Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313,500</td>
	                                    <td>3597</td>
	                                    <td>h.kennedy@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana</td>
	                                    <td>Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385,750</td>
	                                    <td>1965</td>
	                                    <td>t.fitzpatrick@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael</td>
	                                    <td>Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198,500</td>
	                                    <td>1581</td>
	                                    <td>m.silva@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul</td>
	                                    <td>Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725,000</td>
	                                    <td>3059</td>
	                                    <td>p.byrd@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria</td>
	                                    <td>Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237,500</td>
	                                    <td>1721</td>
	                                    <td>g.little@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley</td>
	                                    <td>Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132,000</td>
	                                    <td>2558</td>
	                                    <td>b.greer@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai</td>
	                                    <td>Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217,500</td>
	                                    <td>2290</td>
	                                    <td>d.rios@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette</td>
	                                    <td>Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345,000</td>
	                                    <td>1937</td>
	                                    <td>j.caldwell@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri</td>
	                                    <td>Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675,000</td>
	                                    <td>6154</td>
	                                    <td>y.berry@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar</td>
	                                    <td>Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106,450</td>
	                                    <td>8330</td>
	                                    <td>c.vance@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris</td>
	                                    <td>Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85,600</td>
	                                    <td>3023</td>
	                                    <td>d.wilder@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica</td>
	                                    <td>Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1,200,000</td>
	                                    <td>5797</td>
	                                    <td>a.ramos@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin</td>
	                                    <td>Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92,575</td>
	                                    <td>8822</td>
	                                    <td>g.joyce@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer</td>
	                                    <td>Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357,650</td>
	                                    <td>9239</td>
	                                    <td>j.chang@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden</td>
	                                    <td>Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206,850</td>
	                                    <td>1314</td>
	                                    <td>b.wagner@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona</td>
	                                    <td>Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850,000</td>
	                                    <td>2947</td>
	                                    <td>f.green@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou</td>
	                                    <td>Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163,000</td>
	                                    <td>8899</td>
	                                    <td>s.itou@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle</td>
	                                    <td>House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95,400</td>
	                                    <td>2769</td>
	                                    <td>m.house@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki</td>
	                                    <td>Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114,500</td>
	                                    <td>6832</td>
	                                    <td>s.burks@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott</td>
	                                    <td>Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145,000</td>
	                                    <td>3606</td>
	                                    <td>p.bartlett@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin</td>
	                                    <td>Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235,500</td>
	                                    <td>2860</td>
	                                    <td>g.cortez@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena</td>
	                                    <td>Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324,050</td>
	                                    <td>8240</td>
	                                    <td>m.mccray@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity</td>
	                                    <td>Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85,675</td>
	                                    <td>5384</td>
	                                    <td>u.butler@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard</td>
	                                    <td>Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164,500</td>
	                                    <td>7031</td>
	                                    <td>h.hatfield@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope</td>
	                                    <td>Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109,850</td>
	                                    <td>6318</td>
	                                    <td>h.fuentes@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian</td>
	                                    <td>Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452,500</td>
	                                    <td>9422</td>
	                                    <td>v.harrell@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy</td>
	                                    <td>Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136,200</td>
	                                    <td>7580</td>
	                                    <td>t.mooney@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson</td>
	                                    <td>Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645,750</td>
	                                    <td>1042</td>
	                                    <td>j.bradshaw@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia</td>
	                                    <td>Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234,500</td>
	                                    <td>2120</td>
	                                    <td>o.liang@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno</td>
	                                    <td>Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163,500</td>
	                                    <td>6222</td>
	                                    <td>b.nash@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura</td>
	                                    <td>Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139,575</td>
	                                    <td>9383</td>
	                                    <td>s.yamamoto@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor</td>
	                                    <td>Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98,540</td>
	                                    <td>8327</td>
	                                    <td>t.walton@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn</td>
	                                    <td>Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87,500</td>
	                                    <td>2927</td>
	                                    <td>f.camacho@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge</td>
	                                    <td>Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138,575</td>
	                                    <td>8352</td>
	                                    <td>s.baldwin@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida</td>
	                                    <td>Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125,250</td>
	                                    <td>7439</td>
	                                    <td>z.frank@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita</td>
	                                    <td>Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115,000</td>
	                                    <td>4389</td>
	                                    <td>z.serrano@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer</td>
	                                    <td>Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75,650</td>
	                                    <td>3431</td>
	                                    <td>j.acosta@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara</td>
	                                    <td>Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145,600</td>
	                                    <td>3990</td>
	                                    <td>c.stevens@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione</td>
	                                    <td>Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356,250</td>
	                                    <td>1016</td>
	                                    <td>h.butler@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael</td>
	                                    <td>Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103,500</td>
	                                    <td>6733</td>
	                                    <td>l.greer@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas</td>
	                                    <td>Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86,500</td>
	                                    <td>8196</td>
	                                    <td>j.alexander@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad</td>
	                                    <td>Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183,000</td>
	                                    <td>6373</td>
	                                    <td>s.decker@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael</td>
	                                    <td>Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183,000</td>
	                                    <td>5384</td>
	                                    <td>m.bruce@datatables.net</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna</td>
	                                    <td>Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112,000</td>
	                                    <td>4226</td>
	                                    <td>d.snider@datatables.net</td>
	                                </tr>
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Scroll - horizontal Ends-->
	        <!-- Language Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>Language - Comma decimal place</h5>
	                    <span>
	                        A dot (.) is used to mark the decimal place in Javascript, however, many parts of the world use a comma (,) and other characters such as the Unicode decimal separator (⎖) or a dash (-) are often used to show the
	                        decimal place in a displayed number.
	                    </span>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display" id="basic-14">
	                            <thead>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>Tiger Nixon</td>
	                                    <td>System Architect</td>
	                                    <td>Edinburgh</td>
	                                    <td>61</td>
	                                    <td>2011/04/25</td>
	                                    <td>$320.800,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Garrett Winters</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>63</td>
	                                    <td>2011/07/25</td>
	                                    <td>$170.750,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Ashton Cox</td>
	                                    <td>Junior Technical Author</td>
	                                    <td>San Francisco</td>
	                                    <td>66</td>
	                                    <td>2009/01/12</td>
	                                    <td>$86.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Cedric Kelly</td>
	                                    <td>Senior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2012/03/29</td>
	                                    <td>$433.060,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Airi Satou</td>
	                                    <td>Accountant</td>
	                                    <td>Tokyo</td>
	                                    <td>33</td>
	                                    <td>2008/11/28</td>
	                                    <td>$162.700,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Brielle Williamson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2012/12/02</td>
	                                    <td>$372.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Herrod Chandler</td>
	                                    <td>Sales Assistant</td>
	                                    <td>San Francisco</td>
	                                    <td>59</td>
	                                    <td>2012/08/06</td>
	                                    <td>$137.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Rhona Davidson</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Tokyo</td>
	                                    <td>55</td>
	                                    <td>2010/10/14</td>
	                                    <td>$327.900,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Colleen Hurst</td>
	                                    <td>Javascript Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>39</td>
	                                    <td>2009/09/15</td>
	                                    <td>$205.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Sonya Frost</td>
	                                    <td>Software Engineer</td>
	                                    <td>Edinburgh</td>
	                                    <td>23</td>
	                                    <td>2008/12/13</td>
	                                    <td>$103.600,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Jena Gaines</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>30</td>
	                                    <td>2008/12/19</td>
	                                    <td>$90.560,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Quinn Flynn</td>
	                                    <td>Support Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>22</td>
	                                    <td>2013/03/03</td>
	                                    <td>$342.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Charde Marshall</td>
	                                    <td>Regional Director</td>
	                                    <td>San Francisco</td>
	                                    <td>36</td>
	                                    <td>2008/10/16</td>
	                                    <td>$470.600,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Haley Kennedy</td>
	                                    <td>Senior Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>43</td>
	                                    <td>2012/12/18</td>
	                                    <td>$313.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Tatyana Fitzpatrick</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>19</td>
	                                    <td>2010/03/17</td>
	                                    <td>$385.750,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Silva</td>
	                                    <td>Marketing Designer</td>
	                                    <td>London</td>
	                                    <td>66</td>
	                                    <td>2012/11/27</td>
	                                    <td>$198.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Paul Byrd</td>
	                                    <td>Chief Financial Officer (CFO)</td>
	                                    <td>New York</td>
	                                    <td>64</td>
	                                    <td>2010/06/09</td>
	                                    <td>$725.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Gloria Little</td>
	                                    <td>Systems Administrator</td>
	                                    <td>New York</td>
	                                    <td>59</td>
	                                    <td>2009/04/10</td>
	                                    <td>$237.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Bradley Greer</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>41</td>
	                                    <td>2012/10/13</td>
	                                    <td>$132.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Dai Rios</td>
	                                    <td>Personnel Lead</td>
	                                    <td>Edinburgh</td>
	                                    <td>35</td>
	                                    <td>2012/09/26</td>
	                                    <td>$217.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Jenette Caldwell</td>
	                                    <td>Development Lead</td>
	                                    <td>New York</td>
	                                    <td>30</td>
	                                    <td>2011/09/03</td>
	                                    <td>$345.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Yuri Berry</td>
	                                    <td>Chief Marketing Officer (CMO)</td>
	                                    <td>New York</td>
	                                    <td>40</td>
	                                    <td>2009/06/25</td>
	                                    <td>$675.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Caesar Vance</td>
	                                    <td>Pre-Sales Support</td>
	                                    <td>New York</td>
	                                    <td>21</td>
	                                    <td>2011/12/12</td>
	                                    <td>$106.450,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Doris Wilder</td>
	                                    <td>Sales Assistant</td>
	                                    <td>Sidney</td>
	                                    <td>23</td>
	                                    <td>2010/09/20</td>
	                                    <td>$85.600,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Angelica Ramos</td>
	                                    <td>Chief Executive Officer (CEO)</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2009/10/09</td>
	                                    <td>$1.200.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Joyce</td>
	                                    <td>Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>42</td>
	                                    <td>2010/12/22</td>
	                                    <td>$92.575,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Chang</td>
	                                    <td>Regional Director</td>
	                                    <td>Singapore</td>
	                                    <td>28</td>
	                                    <td>2010/11/14</td>
	                                    <td>$357.650,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Brenden Wagner</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>28</td>
	                                    <td>2011/06/07</td>
	                                    <td>$206.850,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Fiona Green</td>
	                                    <td>Chief Operating Officer (COO)</td>
	                                    <td>San Francisco</td>
	                                    <td>48</td>
	                                    <td>2010/03/11</td>
	                                    <td>$850.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Shou Itou</td>
	                                    <td>Regional Marketing</td>
	                                    <td>Tokyo</td>
	                                    <td>20</td>
	                                    <td>2011/08/14</td>
	                                    <td>$163.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Michelle House</td>
	                                    <td>Integration Specialist</td>
	                                    <td>Sidney</td>
	                                    <td>37</td>
	                                    <td>2011/06/02</td>
	                                    <td>$95.400,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Suki Burks</td>
	                                    <td>Developer</td>
	                                    <td>London</td>
	                                    <td>53</td>
	                                    <td>2009/10/22</td>
	                                    <td>$114.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Prescott Bartlett</td>
	                                    <td>Technical Author</td>
	                                    <td>London</td>
	                                    <td>27</td>
	                                    <td>2011/05/07</td>
	                                    <td>$145.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Gavin Cortez</td>
	                                    <td>Team Leader</td>
	                                    <td>San Francisco</td>
	                                    <td>22</td>
	                                    <td>2008/10/26</td>
	                                    <td>$235.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Martena Mccray</td>
	                                    <td>Post-Sales support</td>
	                                    <td>Edinburgh</td>
	                                    <td>46</td>
	                                    <td>2011/03/09</td>
	                                    <td>$324.050,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Unity Butler</td>
	                                    <td>Marketing Designer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/12/09</td>
	                                    <td>$85.675,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Howard Hatfield</td>
	                                    <td>Office Manager</td>
	                                    <td>San Francisco</td>
	                                    <td>51</td>
	                                    <td>2008/12/16</td>
	                                    <td>$164.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Hope Fuentes</td>
	                                    <td>Secretary</td>
	                                    <td>San Francisco</td>
	                                    <td>41</td>
	                                    <td>2010/02/12</td>
	                                    <td>$109.850,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Vivian Harrell</td>
	                                    <td>Financial Controller</td>
	                                    <td>San Francisco</td>
	                                    <td>62</td>
	                                    <td>2009/02/14</td>
	                                    <td>$452.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Timothy Mooney</td>
	                                    <td>Office Manager</td>
	                                    <td>London</td>
	                                    <td>37</td>
	                                    <td>2008/12/11</td>
	                                    <td>$136.200,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Jackson Bradshaw</td>
	                                    <td>Director</td>
	                                    <td>New York</td>
	                                    <td>65</td>
	                                    <td>2008/09/26</td>
	                                    <td>$645.750,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Olivia Liang</td>
	                                    <td>Support Engineer</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2011/02/03</td>
	                                    <td>$234.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Bruno Nash</td>
	                                    <td>Software Engineer</td>
	                                    <td>London</td>
	                                    <td>38</td>
	                                    <td>2011/05/03</td>
	                                    <td>$163.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Sakura Yamamoto</td>
	                                    <td>Support Engineer</td>
	                                    <td>Tokyo</td>
	                                    <td>37</td>
	                                    <td>2009/08/19</td>
	                                    <td>$139.575,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Thor Walton</td>
	                                    <td>Developer</td>
	                                    <td>New York</td>
	                                    <td>61</td>
	                                    <td>2013/08/11</td>
	                                    <td>$98.540,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Finn Camacho</td>
	                                    <td>Support Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>47</td>
	                                    <td>2009/07/07</td>
	                                    <td>$87.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Serge Baldwin</td>
	                                    <td>Data Coordinator</td>
	                                    <td>Singapore</td>
	                                    <td>64</td>
	                                    <td>2012/04/09</td>
	                                    <td>$138.575,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Zenaida Frank</td>
	                                    <td>Software Engineer</td>
	                                    <td>New York</td>
	                                    <td>63</td>
	                                    <td>2010/01/04</td>
	                                    <td>$125.250,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Zorita Serrano</td>
	                                    <td>Software Engineer</td>
	                                    <td>San Francisco</td>
	                                    <td>56</td>
	                                    <td>2012/06/01</td>
	                                    <td>$115.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Jennifer Acosta</td>
	                                    <td>Junior Javascript Developer</td>
	                                    <td>Edinburgh</td>
	                                    <td>43</td>
	                                    <td>2013/02/01</td>
	                                    <td>$75.650,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Cara Stevens</td>
	                                    <td>Sales Assistant</td>
	                                    <td>New York</td>
	                                    <td>46</td>
	                                    <td>2011/12/06</td>
	                                    <td>$145.600,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Hermione Butler</td>
	                                    <td>Regional Director</td>
	                                    <td>London</td>
	                                    <td>47</td>
	                                    <td>2011/03/21</td>
	                                    <td>$356.250,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Lael Greer</td>
	                                    <td>Systems Administrator</td>
	                                    <td>London</td>
	                                    <td>21</td>
	                                    <td>2009/02/27</td>
	                                    <td>$103.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Jonas Alexander</td>
	                                    <td>Developer</td>
	                                    <td>San Francisco</td>
	                                    <td>30</td>
	                                    <td>2010/07/14</td>
	                                    <td>$86.500,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Shad Decker</td>
	                                    <td>Regional Director</td>
	                                    <td>Edinburgh</td>
	                                    <td>51</td>
	                                    <td>2008/11/13</td>
	                                    <td>$183.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Michael Bruce</td>
	                                    <td>Javascript Developer</td>
	                                    <td>Singapore</td>
	                                    <td>29</td>
	                                    <td>2011/06/27</td>
	                                    <td>$183.000,00</td>
	                                </tr>
	                                <tr>
	                                    <td>Donna Snider</td>
	                                    <td>Customer Support</td>
	                                    <td>New York</td>
	                                    <td>27</td>
	                                    <td>2011/01/25</td>
	                                    <td>$112.000,00</td>
	                                </tr>
	                            </tbody>
	                            <tfoot>
	                                <tr>
	                                    <th>Name</th>
	                                    <th>Position</th>
	                                    <th>Office</th>
	                                    <th>Age</th>
	                                    <th>Start date</th>
	                                    <th>Salary</th>
	                                </tr>
	                            </tfoot>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
	<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
	@endpush

@endsection