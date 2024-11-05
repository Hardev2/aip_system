
            <div class="hero">
               <div class="page-2-container">
                <div class="table">
                <div class="table-header">
                    <h1>Annual Investment Program cy 2025 per sector</h1>
                    <h1>(Institutional, Social, Economic, Enviornment)</h1>
                </div>
               <div class="add-btn">
                 <button onclick="document.getElementById('id01').style.display='block'"><i class="fa-solid fa-plus"></i>Add new</button>
               </div>
                <div class="table-category">
                    <h2>Institutional Development Sector</h2>
                    <div class="view-btn">
                        <a href="router.php?page=aip"><i class="fa-solid fa-eye"></i>View</a>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>AIP CODE</th>
                            <th>DEPARTMENT/OFFICE</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1000-000-2-1-01</td>
                            <td>Office of the Mayor</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1000-000-2-1-01</td>
                            <td>Office of the Mayor (Special Bodies/Programs/Projects) All Offices CO</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1</td>
                            <td>Promotion for the Welfare and Protection of Children</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2</td>
                            <td>Cooperative Development</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>3</td>
                            <td>Cebu City Anti-Mendicancy</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>4</td>
                            <td>Cebu City Anti-Indecency</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>5</td>
                            <td>Local Housing Board</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>5</td>
                            <td>Cebu City Anti-Discrimination</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>5</td>
                            <td>Cebu City Senior Citizen</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>5</td>
                            <td>Cebu City Women & Family Affaiors Programs</td>
                        </tr>
                    </tbody>
                </table>

                <!-- SOCIAL SECTOR -->
                <div class="table-category">
                    <h2>Social Sector</h2>
                    <div class="view-btn">
                        <a href="router.php?page=aip"><i class="fa-solid fa-eye"></i>View</a>
                       
                    </div>
                </div>
                <table >
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>AIP CODE</th>
                            <th>DEPARTMENT/OFFICE</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1000-000-2-1-01</td>
                            <td>Office of the Mayor</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1000-000-2-1-01</td>
                            <td>Office of the Mayor (Special Bodies/Programs/Projects) All Offices CO</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1</td>
                            <td>Promotion for the Welfare and Protection of Children</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>2</td>
                            <td>Cooperative Development</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>3</td>
                            <td>Cebu City Anti-Mendicancy</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>4</td>
                            <td>Cebu City Anti-Indecency</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>5</td>
                            <td>Local Housing Board</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>5</td>
                            <td>Cebu City Anti-Discrimination</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>5</td>
                            <td>Cebu City Senior Citizen</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>5</td>
                            <td>Cebu City Women & Family Affaiors Programs</td>
                        </tr>
                    </tbody>
                </table>
                </div>
               </div>
            </div>
        </div>
    </div>
    <div id="id01" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="form-col">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><i class="fa-solid fa-x"></i></button>
                    </div>
                <div class="form-container">
                    <div class="form-container-header">
                    <h1>Contact Information</h1>
                    <p>We'll never share this information with anyone</p>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="aip-code"><b>AIP CODE</b></label>
                            <input type="text" placeholder="AIP CODE" name="aip-code" value="1000-000-2-1-01" disabled>
                        </div>
                       
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <label for="psw"><b>Department/Office</b></label>
                            <input type="text" placeholder="Enter department/office" name="psw" required><br>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-col">
                        <label for=""><b>Category</b></label>
                            <select name="" id="">
                                <option value="">Institutional Development Sector</option>
                                <option value="">Social Sector</option>
                                <option value="">Economic Sector</option>
                                <option value="">Environment Sector</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                        <button type="submit">Submit</button>
                        </div>
                    </div>

                   
                </div>
        </form>
</div>
</body>
<script src="public/js/modal.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>
</html>