require 'spec_helper'

describe file('/var/wordpress/wp-config.php') do
  it { should be_file }
  its(:content) { should match /define\('DB_NAME', 'wordpress'\);/ }
end
