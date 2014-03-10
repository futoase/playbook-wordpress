require 'spec_helper'

describe package('mysql-community-client') do
  it { should be_installed }
end

describe package('mysql-community-server') do
  it { should be_installed }
end

describe service('mysqld') do
  it { should be_running   }
end

describe port(3306) do
  it { should be_listening }
end

describe file('/etc/my.cnf') do
  it { should be_file }
  its(:content) { should match /\[mysqld\]/ }
end
