# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  # All Vagrant configuration is done here. The most common configuration
  # options are documented and commented below. For a complete reference,
  # please see the online documentation at vagrantup.com.

  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box = "precise32"

  # The url from where the 'config.vm.box' box will be fetched if it
  # doesn't already exist on the user's system.
  # config.vm.box_url = "http://domain.com/path/to/above.box"
    config.vm.box_url = "http://files.vagrantup.com/precise32.box"

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  # config.vm.network :forwarded_port, guest: 80, host: 8080
    config.vm.network :forwarded_port, guest: 80, host: 8080
    config.vm.network :forwarded_port, guest: 3306, host: 33066
  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
    config.vm.network :private_network, ip: "192.168.33.27"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network :public_network

  # If true, then any SSH connections made will enable agent forwarding.
  # Default value: false
  # config.ssh.forward_agent = true

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  # config.vm.synced_folder "../data", "/vagrant_data"
    config.vm.synced_folder "./src/", "/var/www/src", mount_options: ['dmode=777','fmode=666']

  # Provider-specific configuration so you can fine-tune various
  # backing providers for Vagrant. These expose provider-specific options.
  # Example for VirtualBox:
  #
  # config.vm.provider :virtualbox do |vb|
  #   # Don't boot with headless mode
  #   vb.gui = true
  #
  #   # Use VBoxManage to customize the VM. For example to change memory:
  #   vb.customize ["modifyvm", :id, "--memory", "1024"]
  # end
    config.vm.provider :virtualbox do |vb|
      vb.customize ["modifyvm", :id, "--memory", "1024"]
      vb.customize ["modifyvm", :id, "--name", "Arina"]
    end


  # Enable provisioning with chef solo, specifying a cookbooks path, roles
  # path, and data_bags path (all relative to this Vagrantfile), and adding
  # some recipes and/or roles.
  #
  # config.vm.provision :chef_solo do |chef|
  #   chef.cookbooks_path = "../my-recipes/cookbooks"
  #   chef.roles_path = "../my-recipes/roles"
  #   chef.data_bags_path = "../my-recipes/data_bags"
  #   chef.add_recipe "mysql"
  #   chef.add_role "web"
  #
  #   # You may also specify custom JSON attributes:
  #   
  # end
  config.vm.provision :chef_solo do |chef|
    chef.cookbooks_path = "cookbooks"
    chef.roles_path  = "roles"

    chef.add_role("dev")

    chef.json = { 
        "vhosts" => {
            "arina" => {
                "alias_path" => "",
                "path" => "/var/www/src",
                "docroot" => "/var/www/src/public",
                "server_name" => "arina.dev",
                "server_email" => "ZAYEC77@gmail.com",
                "database" => "app",
                "composer_need" => true,
                "migrate" => true
            },
            "phpmyadmin" => {
                "alias_path" => "/phpmyadmin",
                "path" => "/usr/share/phpmyadmin",
                "docroot" => "/usr/share/phpmyadmin",
                "server_name" => "pma.dev",
                "server_email" => "ZAYEC77@gmail.com"
            }
        },
        "php" => {
            "ius" => "5.3",
            "secure_functions" => {
                "disable_functions" => "pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority"
            }
        },
        "xdebug" => {
            "remote_enable" => "On",
            "remote_autostart" => 1,
            "remote_connect_back" => 1
        },
        "mysql" => {
            "server_root_password" => "root",
            "server_repl_password" => "root",
            "server_debian_password" => "root"
        },
        "phpmyadmin" => {
            "fpm" => false,
            "home" => "/usr/share/phpmyadmin"
        }
    }
  end
end