	                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <?php
        echo $this->Html->script(array('jquery',
                                'jquery-1.10.2',
                                'jquery-2.1.1')
             );
        $this->fetch('script');
        echo $this->Html->script('bootstrap');
    ?>
</body>

</html>