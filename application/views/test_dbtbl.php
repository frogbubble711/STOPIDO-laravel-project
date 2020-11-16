</header>
<section class="my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>First name</th>
                            <th>Last Name</th>
                            <th>City</th>
                            </th>
                    </thead>
                    <tbody>
                        <?php
                        $query = $this->db->query('SELECT * FROM test_tbl');

                        foreach ($query->result() as $row) {
                            echo "<tr>";
                            echo "<td>".$row->slno."</td>";
                            echo "<td>".$row->fnm."</td>";
                            echo "<td>".$row->lnm."</td>";
                            echo "<td>".$row->ct."</td>";
                            echo "</tr>";
                        }

                        echo 'Total Results: ' . $query->num_rows();
                        ?>
                        <!-- <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>