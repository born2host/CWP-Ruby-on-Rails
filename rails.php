<?php
        if (isset($_POST['installRails'])) {
                $command = "yum -y install ruby && yum -y install gcc g++ make automake autoconf curl-devel openssl-devel zlib-devel sqlite-devel && yum -y install ruby-rdoc ruby-devel && yum -y install rubygems && gem update && gem install rails -V";
                echo '<pre>';
                echo shell_exec($command);
                echo '</pre>';
        }
?>
<pre>
<center><h3>Install Ruby on Rails (RoR) on your server</h3></center>
</pre>
<pre>
<center>
        <div class="panel-body" style="padding-bottom:0;">
                <form method="post">
                        <table cellpadding="5" border="0">
                                <tr>
                                        <td></td><td align="center"><button name="installRails">Install Ruby on Rails</button></td>
                                </tr>
                        </table>
                </form>
                <center>Script by <a href="https://www.born2host.com" target="_blank">Born 2 Host</a></center>
        </div>
</center>
</pre>
