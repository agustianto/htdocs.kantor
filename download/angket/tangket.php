                                            <div class='row form-group'>
                                            <table class='table col-11' style='margin-left:4%;margin-right:4%;'>
                                            <thead>
                                                <tr>
                                                    <th scope='col' width="5%">Nomor</th>
                                                    <th scope='col' width="75%">Pertanyaan</th>
                                                    <th scope='col' width="20%">Jawaban</th> 
                                                </tr>                
                                            </thead>
                                            
                                            <?php
                                                for ($i; $i < $x ; $i++) { 
                                                    # code...
                                                    $a = $i+1;
                                                    echo"
                                                   
                                                    <tbody>
                                                        <tr>
                                                            <td scope='row' style='margin-left:10%;'> ".$a."</td>
                                                            <td>Saya menyadari bahwa saya menyenangi komputer sejak sekolah dasar. Dengan kuliah di jurusan Ilmu Komputer, saya menambah wawasan dan pengetahuan saya tentang komputer.</td>
                                                            <td>
                                                            <form>
                                                                <label class='radio-inline'>
                                                                  <input type='radio' name='ori".$a."' value='5' required checked> 5
                                                                </label>
                                                                <label class='radio-inline'>
                                                                  <input type='radio' name='ori".$a."' value='4' required> 4
                                                                </label>
                                                                <label class='radio-inline'>
                                                                  <input type='radio' name='ori".$a."' value='3' required> 3
                                                                </label>
                                                                <label class='radio-inline'>
                                                                  <input type='radio' name='ori".$a."' value='2' required> 2
                                                                </label>
                                                                <label class='radio-inline'>
                                                                  <input type='radio' name='ori".$a."' value='1' required> 1
                                                                </label>
                                                            </form>
                                                            
                                                            </td>
                                                        </tr>   
                                                    </tbody>

                                                    ";
                                                }
                                            ?>
                                            </table>
                                            </div>